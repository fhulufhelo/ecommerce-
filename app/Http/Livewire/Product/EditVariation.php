<?php

namespace App\Http\Livewire\Product;

use App\Actions\Product\UpdateVariation;
use App\Models\Product;
use App\Models\Variation;
use Livewire\Component;

class EditVariation extends Component
{
    public bool $openModal = false;

    protected $listeners = ['editVariation'];

    public $variation;

    public Product $product;

    public array $state = [];

    public function editVariation(int $variationId)
    {
        $variation = Variation::with('product')->find($variationId);

        $this->variation = $variation;

        $this->state = [
            'title' => $variation->title,
            'type' => $variation->type,
            'price' => $variation->price,
            'sku' => $variation->sku,
            'order' => $variation->order,
            'parent_id' => $variation->parent_id,
        ];

        $this->openModal = true;
    }

    public function update(UpdateVariation $creator)
    {
        $creator->update($this->state,$this->variation);

        $this->emit('refresh');

        $this->reset(['openModal','state']);
    }

    public function getParentsProperty()
    {
        return $this->product->variations
            ->filter(fn($variation) => $variation->id !== $this->variation);
    }

    public function render()
    {
        return view('livewire.product.edit-variation');
    }
}
