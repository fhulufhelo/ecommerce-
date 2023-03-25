<?php

namespace App\Actions\Product;

use App\Models\Variation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UpdateVariation
{
    /**
     * @throws ValidationException
     */
    public function update(array $input, Variation $product)
    {
        Validator::make($input, [
            'title' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string'],
            'price' => ['nullable', 'numeric'],
            'sku' => ['nullable', 'string'],
            'parent_id' => ['nullable', 'numeric'],
            'order' => ['required','numeric']
        ])->validate();

        return $product->update([
            'title' => $input['title'],
            'type' => $input['type'],
            'price' => (int) $input['price'],
            'sku' => $input['sku'],
            'parent_id' => $input['parent_id'],
            'order' => (int) $input['order'],
        ]);

    }
}
