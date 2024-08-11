<?php

namespace App\Livewire;

use App\Exports\BookExport;
use App\Models\Book;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class BookList extends Component
{
    use WithFileUploads;
    
    public $title;
    public $description;
    public $quantity;
    public $file;
    public $cover;
    public $category;
    public $filterCategory;


    public $openModal = false;

    public $method = 'save';


    public function save()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'file' => 'required|mimes:pdf',
            'cover' => 'required|image',
            'category' => 'required'
        ]);

        $file = $this->file->store('books');
        $cover = $this->cover->store('covers');

        Book::create([
            'user_id' => Auth::id(),
            'category_id' => $this->category,
            'slug' => Str::slug($this->title),
            'title' => $this->title,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'file' => $file,
            'cover' => $cover
        ]);

        $this->reset();
        $this->openModal = false;
    }

    public function delete($id)
    {
        Book::find($id)->delete();
    }

    public function edit($id)
    {
        $book = Book::find($id);

        $this->title = $book->title;
        $this->description = $book->description;
        $this->quantity = $book->quantity;
        $this->category = $book->category_id;
        $this->openModal = true;
        $this->method = 'update(' . $id . ')';
    }

    public function update($id)
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'category' => 'required',
        ]);

        if ($this->file && $this->cover) {
            $this->validate([
                'file' => 'required|mimes:pdf',
                'cover' => 'required|image',
            ]);
        }

        $book = Book::find($id);

        $book->update([
            'slug' => Str::slug($this->title),
            'title' => $this->title,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'category_id' => $this->category,
            'file' => $this->file ? $this->file->store('books') : $book->file,
            'cover' => $this->cover ? $this->cover->store('covers') : $book->cover
        ]);

        $this->reset();
        $this->openModal = false;
        $this->method = 'save';
    }

    public function export() 
    {
        return Excel::download(new BookExport, 'data-buku.xlsx');
    }

    public function render()
    {
        $books = Book::query();
        $categories = Category::get();

        if(Auth::user()->hasRole('user')) {
            $books->where('user_id', Auth::id());
        }

        if ($this->filterCategory) {
            $books->where('category_id', $this->filterCategory);
        }

        return view('livewire.book-list', [
            'books' => $books->get(),
            'categories' => $categories
        ]);
    }
}
