<style>
    .error {
        color: red;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    form div {
        margin-bottom: 16px;
        display: flex;
        flex-direction: column;
    }

    form div input,
    form div textarea {
        padding: 8px;
        margin-block: 8px;
    }

    form .btn {
        display: flex;
        flex-direction: row;
        gap: 16px;
        align-items: center;
    }

    form .btn a {
        text-decoration: none;
        color: #171717;
    }

    form .btn a:hover {
        color: #4CC9F0;
    }

    form .btn button {
        padding: 8px;
    }
</style>

<x-layout title="Modifier le produit">
    <h1>Modifier le produit</h1>
    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Nom</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>SKU</label>
            <input type="text" name="sku" value="{{ old('sku', $product->sku) }}">
            @error('sku')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Prix</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}">
            @error('price')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Stock</label>
            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}">
            @error('stock')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Description</label>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="btn">
            <button type="submit">Modifier</button>
            <a href="{{ route('products.index') }}">Annuler</a>
        </div>
    </form>
</x-layout>
