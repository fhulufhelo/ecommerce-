<?php

namespace App\Http\Livewire\Product;

use App\Actions\Product\UpdateProduct;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class EditProduct extends Component
{
    public Product $product;

    public function mount()
    {
        $this->state = [
            'title' => $this->product->title,
            'description' => $this->product->description,
            'price' => $this->product->price,
            'live_at' => $this->product->live_at,
        ];
    }

    public function update(UpdateProduct $creator)
    {
        $creator->update($this->state, $this->product);

        $this->emit('refresh');
    }

    public function getCategoriesProperty(): \Illuminate\Database\Eloquent\Collection
    {
        return Category::all();
    }
    public function render()
    {
        return view('livewire.product.edit-product');
    }
}
