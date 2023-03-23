<?php

namespace App\Actions\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CreateNewProduct
{
    /**
     * @throws ValidationException
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'title' => ['required', 'string', 'max:255', 'unique:products,title'],
            'description' => ['nullable', 'string'],
            'price' => ['numeric', 'required', 'min:1'],
        ])->validate();

        return Product::create([
            'title' => $input['title'],
            'slug' => Str::slug($input['title'], '-'),
            'description' => $input['description'],
            'price' => $input['price'],
        ]);

    }
}
