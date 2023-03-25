<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function create()
    {
        return view('admin.product.product');
    }

    public function edit(Product $product)
    {
        $product->load('categories');

        return view('admin.product.edit',['product' => $product]);
    }

    public function variations(Product $product)
    {
        $product->load('variations');

        return view('admin.product.variations',['product' => $product]);
    }


}
