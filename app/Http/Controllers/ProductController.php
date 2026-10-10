<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
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

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create(
            $request->validated()
        );

        return redirect()
            ->route('products.show', $product)
            ->with(
                'success',
                'Produit cree avec succes.'
                );
    }

    public function show(string $id): View
    {
        $product = Product::findOrFail($id);

        return view('products.show', [
            'product' => $product
        ]);
    }

    public function edit(Product $product): View
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update(
            $request->validated()
        );

        return redirect()
            ->route('products.show', $product)
            ->with(
                'success',
                'Produit modifié'
            );
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('products.index')
            ->with(
                'success',
                'Produit supprimé'
            );
    }
}
