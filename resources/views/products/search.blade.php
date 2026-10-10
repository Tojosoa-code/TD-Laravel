<style>
    .card {
        display: flex;
        gap: 20px;
    }
</style>

<x-layout>
    <h1>Fait vos recherche ici</h1>
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="q" placeholder="Rechercher...">
        <button type="submit">Rechercher</button>
    </form>
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
        <p>Aucun produit trouvé.</p>
    @endforelse
</x-layout>
