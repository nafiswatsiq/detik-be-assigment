<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        $book = Book::query();

        if(Auth::user()->hasRole('user')) {
            $book->where('user_id', Auth::id());
        }
        return view('livewire.dashboard', [
            'book' => $book->count()
        ]);
    }
}
