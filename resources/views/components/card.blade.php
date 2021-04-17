@props([
    'imagePath' => '/images/lakosztaly.jpg',
    'names',
    'price',
    'buttonText' => 'Gomb szovege',
    'route'

])

<div class="w-2/3">
    <img src="{{ $imagePath }}" alt="">
    <div class="flex flex-col items-center justify-center ">
        <p>Szoba</p>
        <p>Ár</p>
        <x-button>{{ $buttonText }}</x-button>
    </div>
</div>