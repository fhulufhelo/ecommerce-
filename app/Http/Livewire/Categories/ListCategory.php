<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class ListCategory extends Component
{
    protected $listeners = ['refresh' => '$refresh'];

    public function getCategoriesProperty(): \Illuminate\Database\Eloquent\Collection
    {
        return Category::all();
    }

    public function edit($id)
    {
        $this->emit('editCategory', $id);
    }

    public function delete($id)
    {
        Category::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.categories.list-category');
    }
}
