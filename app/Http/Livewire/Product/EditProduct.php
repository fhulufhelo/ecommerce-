<?php

namespace App\Http\Livewire\Product;

use App\Actions\Product\UpdateProduct;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class EditProduct extends Component
{
    public bool $openModal = false;

    protected $listeners = ['editProduct'];
    public $productId;

    public array $state = [];

    public function editProduct(int $productId)
    {
        $product = Product::with('categories')->find($productId);

        $this->productId = $productId;

        $this->state = [
            'title' => $product->title,
            'description' => $product->description,
            'price' => $product->price,
            'live_at' => $product->live_at,
            'categories' => $product->categories->pluck('id')->toArray(),
        ];

        $this->openModal = true;
    }

    public function update(UpdateProduct $creator)
    {
        $product = Product::find($this->productId);
        $creator->update($this->state, $product);

        $this->emit('refresh');

        $this->reset(['openModal','state']);
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
