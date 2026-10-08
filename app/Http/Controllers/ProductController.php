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

    public function search(Request $request): View
    {
        $query = $request->query('q', '');

        $products = Product::where('name', 'like', "%$query%")
            ->orderBy('name')
            ->get();

        return view('products.search', [
            'products' => $products,
            'query' => $query,
        ]);
    }

}
