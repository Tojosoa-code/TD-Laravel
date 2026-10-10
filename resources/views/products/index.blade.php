<style>
    .card {
        display: flex;
        gap: 20px;
    }
</style>

<x-layout title="Catalogue">
    <h1>Catalogue des produits</h1>
    <a href="{{ route('products.create') }}">Crée une produit</a>
    @forelse($products as $product)
        <x-product-card :name="$product->name" :price="$product->price" :stock="$product->stock">
            <div class="card">
                <a href="{{ route('products.show', ['product' => $product->id]) }}">
                    Voir
                </a>
                <form method="POST" action="{{ route('products.destroy', $product) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        Supprimer
                    </button>
                </form>
                <a href="{{ route('products.edit', $product) }}">Modifier</a>
            </div>
        </x-product-card>
    @empty
        <p>Aucun produit disponible.</p>
    @endforelse
</x-layout>
