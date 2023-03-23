<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ListProduct extends Component
{
    protected $listeners = ['refresh' => '$refresh'];

    public function getProductsProperty(): \Illuminate\Database\Eloquent\Collection
    {
        return Product::all();
    }

    public function edit($id)
    {
        $this->emit('editProduct', $id);
    }

    public function delete($id)
    {
        Product::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.product.list-product');
    }
}
