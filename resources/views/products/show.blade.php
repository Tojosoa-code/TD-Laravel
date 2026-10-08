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
    <p>
        <a href="{{ route('products.index') }}">
            Retour au catalogue
        </a>
    </p>
</x-layout>
