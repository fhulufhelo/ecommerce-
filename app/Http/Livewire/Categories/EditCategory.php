<?php

namespace App\Http\Livewire\Categories;

use App\Actions\Category\UpdateCategory;
use App\Models\Category;
use Livewire\Component;

class EditCategory extends Component
{
    public bool $openModal = false;

    protected $listeners = ['editCategory'];
    public $categoryId;

    public array $state = [
        'title' => null,
        'parent_id' => null,
    ];

    public function editCategory(int $categoryId)
    {
        $category = Category::find($categoryId);

        $this->categoryId = $categoryId;

        $this->state = [
            'title' => $category->title,
            'parent_id' => $category->parent_id,
        ];

        $this->openModal = true;
    }

    public function update(UpdateCategory $creator)
    {
        $category = Category::find($this->categoryId);
        $creator->update($this->state, $category);

        $this->emit('refresh');

        $this->reset(['openModal','state']);
    }

    public function getCategoriesProperty(): \Illuminate\Database\Eloquent\Collection
    {
        return Category::all()->filter(fn($category) => $category->id !== $this->categoryId);
    }

    public function render()
    {
        return view('livewire.categories.edit-category');
    }
}
