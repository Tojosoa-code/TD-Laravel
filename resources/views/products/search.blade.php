<x-layout>
    <h1>Fait vos recherche ici</h1>
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="q" placeholder="Rechercher...">
        <button type="submit">Rechercher</button>
    </form>
    @forelse($products as $product)
        <x-product-card :name="$product->name" :price="$product->price" :stock="$product->stock">
            <a href="{{ route('products.show', ['id' => $product->id]) }}">
                Voir
            </a>
        </x-product-card>
    @empty
        <p>Aucun produit trouvé.</p>
    @endforelse
</x-layout>
