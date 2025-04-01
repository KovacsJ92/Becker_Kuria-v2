<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    <meta property="og:title" content="Becker Kúria">
    @hasSection('meta_data')
        @yield('meta_data')
    @else
        <meta property="og:description"
            content="A part menti dombokra épült, erdők és hegyek ölelésében található Balatonszepezden várjuk múltszázadi hangulatú kúriánkba, pihenni vágyó vendégeinket. Az 1850-es években épült kúria, a falu központjában,a vízpart közelében,a templomkert szomszédságában korhű állapotában pompázik.">
        <meta property="og:url" content="https://beckerkuria.hu/">
    @endif
    <meta property="og:type" content="website">
    <meta property="robots" content="index, follow">
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    @livewireStyles


    <script src="{{ url(mix('js/app.js')) }}" defer></script>
    @livewireScripts

    <style>
        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 24px !important;
            /* Kisebbre állítjuk az ikont */
        }
    </style>
</head>

<body>
    <header>
        <x-navbar></x-navbar>
    </header>

    <body>
        {{ $slot }}
    </body>
    <footer>
        <x-map></x-map>
        <x-footer></x-footer>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            effect: 'fade', // Áttűnés az eredeti opacity-hoz hasonlóan
            fadeEffect: {
                crossFade: true
            }
        });
    </script>
</body>

</html>
