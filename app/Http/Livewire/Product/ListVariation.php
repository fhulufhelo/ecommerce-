<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Models\Variation;
use Livewire\Component;

class ListVariation extends Component
{
    protected $listeners = ['refresh' => '$refresh'];

    public Product $product;

    public function edit($id)
    {
        $this->emit('editVariation', $id);
    }

    public function delete($id)
    {
        Variation::find($id)->delete();
    }

    public function getVariationsProperty()
    {
        return $this->product->variations()->get();
    }


    public function render()
    {
        return view('livewire.product.list-variation',[
            'variations' => $this->variations
        ]);
    }
}
