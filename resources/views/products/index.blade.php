<x-layout title="Catalogue">
    <x-alert type="warning" class="message">
        Attention : stock faible.
    </x-alert>
    <h1>Catalogue des produits</h1>
    @forelse($products as $product)
        <x-product-card :name="$product->name" :price="$product->price" :stock="$product->stock">
            <a href="{{ route('products.show', ['id' => $product->id]) }}">
                Voir
            </a>
        </x-product-card>
    @empty
        <p>Aucun produit disponible.</p>
    @endforelse
</x-layout>
