<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{

    public function index(): View
    {
        $products = Product::orderBy('name')->get();
        return view('products.index', [
            'products' => $products
        ]);
    }



    public function show(string $id): View
    {
        $product = Product::findOrFail($id);

        return view('products.show', [
            'product' => $product
        ]);
    }

}
