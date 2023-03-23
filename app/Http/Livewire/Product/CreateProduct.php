<?php

namespace App\Http\Livewire\Product;

use App\Actions\Product\CreateNewProduct;
use App\Models\Category;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateProduct extends Component
{
    public bool $openModal = false;

    public array $state = [
        'title' => null,
        'description' => null,
        'price' => null,
        'live_at' => null,
        'categories' => [],
    ];

    /**
     * @throws ValidationException
     */
    public function create(CreateNewProduct $creator)
    {
        $creator->create($this->state);

        $this->emit('refresh');

        $this->reset(['openModal']);
    }

    public function getCategoriesProperty(): \Illuminate\Database\Eloquent\Collection
    {
        return Category::all();
    }

    public function render()
    {
        return view('livewire.product.create-product');
    }
}
