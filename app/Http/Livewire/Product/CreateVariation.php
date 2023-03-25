<?php

namespace App\Http\Livewire\Product;

use App\Actions\Product\CreateNewVariation;
use App\Models\Product;
use Livewire\Component;

class CreateVariation extends Component
{
    public bool $openModal = false;

    public Product $product;

    public array $state = [
        'title' => null,
        'type' => null,
        'price' => null,
        'sku' => null,
        'parent_id' => null,
        'order' => null,
    ];

    public function create(CreateNewVariation $creator)
    {
        $creator->create($this->state, $this->product);

        $this->emit('refresh');

        $this->reset(['openModal','state']);
    }

    public function getParentsProperty()
    {
        return $this->product->variations;
    }

    public function render()
    {
        return view('livewire.product.create-variation');
    }
}
