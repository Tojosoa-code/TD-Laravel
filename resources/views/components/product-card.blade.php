@props(['name', 'price', 'stock'])
<div {{ $attributes->class(['product']) }}>
    <h2>{{ $name }}</h2>
    <p>Prix : {{ $price }}</p>
    @if ($stock > 0)
        <p>Disponible</p>
    @else
        <p>Rupture</p>
    @endif
    {{ $slot }}
</div>
