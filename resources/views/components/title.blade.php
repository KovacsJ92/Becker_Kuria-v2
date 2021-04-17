@props([
    'type' => 'gold',
    'colors' => [
        'gold' => 'text-gold99',
        'white' => 'text-white',
    ]

])


<h1 {{ $attributes->merge(['class' => "{$colors[$type]} text-5xl xl:text-6xl uppercase leading-5 w-full text-center py-4"]) }}>
    {{ $slot }}
</h1>