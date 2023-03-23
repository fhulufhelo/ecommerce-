<?php

namespace App\Actions\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UpdateProduct
{
    /**
     * @throws ValidationException
     */
    public function update(array $input, Product $product)
    {
        Validator::make($input, [
            'title' => ['required', 'string', 'max:255',Rule::unique('categories')->ignore($product->title)],
            'description' => ['nullable', 'string'],
            'price' => ['numeric', 'required', 'min:1'],
            'live_at' => ['nullable', 'date_format:Y-m-d H:i:s,Y-m-ds'],

        ])->validate();

        $product->update([
            'title' => $input['title'],
            'slug' => Str::slug($input['title'], '-'),
            'description' => $input['description'],
            'price' => $input['price'],
            'live_at' => $input['live_at'],
        ]);
    }
}
