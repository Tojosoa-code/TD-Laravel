@props([
    'type' => 'success',
])
<div {{ $attributes }}>
    <strong>{{ $type }}</strong>
    {{ $slot }}
</div>
