<?php

namespace App\Http\Livewire\Categories;

use App\Actions\Category\CreateNewCategory;
use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public bool $openModal = false;

    public array $state = [
        'title' => null,
        'parent_id' => null,
    ];

    public function create(CreateNewCategory $creator)
    {
        $creator->create($this->state);

        $this->emit('refresh');

        $this->reset(['openModal','state']);
    }

    public function getCategoriesProperty(): \Illuminate\Database\Eloquent\Collection
    {
        return Category::all();
    }

    public function render()
    {
        return view('livewire.categories.create-category');
    }
}
