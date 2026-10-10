<style>
    .card {
        display: flex;
        gap: 20px;
    }
</style>

<x-layout :title="$product->name">
    <h1>{{ $product->name }}</h1>
    <p>
        Prix : {{ $product->price }}
    </p>
    <p>
        Stock : {{ $product->stock }}
    </p>
    <p>
        {{ $product->description }}
    </p>
    <div class="card">
        <a href="{{ route('products.index') }}">
            Retour au catalogue
        </a>
        <form method="POST" action="{{ route('products.destroy', $product) }}">
            @csrf
            @method('DELETE')
            <button type="submit">
                Supprimer
            </button>
            <a href="{{ route('products.edit', $product) }}">Modifier</a>
        </form>
    </div>
</x-layout>
