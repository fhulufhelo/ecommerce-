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
            'live_at' => ['nullable', 'date_format:Y-m-d H:i:s,Y-m-ds'],
            'categories' => ['required'],
        ])->validate();

        $product = Product::create([
            'title' => $input['title'],
            'slug' => Str::slug($input['title'], '-'),
            'description' => $input['description'],
            'price' => $input['price'],
            'live_at' => $input['live_at'],
        ]);

        $product->categories()->sync( $input['categories'] );
    }
}
