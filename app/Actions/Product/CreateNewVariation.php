<?php

namespace App\Actions\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CreateNewVariation
{
    /**
     * @throws ValidationException
     */
    public function create(array $input, Product $product)
    {
        Validator::make($input, [
            'title' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string'],
            'price' => ['nullable', 'numeric'],
            'sku' => ['nullable', 'string'],
            'parent_id' => ['nullable', 'numeric'],
            'order' => ['required','numeric']
        ])->validate();

        return $product->variations()->create([
            'title' => $input['title'],
            'type' => $input['type'],
            'price' => (int) $input['price'],
            'sku' => $input['sku'],
            'parent_id' => $input['parent_id'],
            'order' => (int) $input['order'],
        ]);

    }
}
