<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use App\Models\Category as ModelsCategory;

class Category extends Component
{
    #[Validate('required')] 
    public $categoryName;
    public $addModal = false;

    public $method = 'save';


    public function save()
    {
        $this->validate();

        ModelsCategory::create([
            'slug' => Str::slug($this->categoryName),
            'name' => $this->categoryName
        ]);

        $this->categoryName = '';
        $this->addModal = false;
    }

    public function delete($id)
    {
        ModelsCategory::find($id)->delete();
    }

    public function edit($id)
    {
        $category = ModelsCategory::find($id);

        $this->categoryName = $category->name;
        $this->addModal = true;
        $this->method = 'update(' . $id . ')';
    }

    public function update($id)
    {
        $this->validate();

        $category = ModelsCategory::find($id);

        $category->update([
            'slug' => Str::slug($this->categoryName),
            'name' => $this->categoryName
        ]);

        $this->categoryName = '';
        $this->addModal = false;
        $this->method = 'save';
    }

    public function render()
    {
        $categories = ModelsCategory::get();

        return view('livewire.category', [
            'categories' => $categories
        ]);
    }
}
