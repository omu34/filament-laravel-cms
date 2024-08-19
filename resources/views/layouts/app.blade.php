<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="">
    <title>{{ config('app.name', 'Asset Finance') }}</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</head>

<body class="flex flex-col">

    {{-- <x-app-header /> --}}
    <livewire:welcome.navigation />

    <main>
        {{ $slot }}
        <livewire:sections.popup-loan-calc />
    </main>

    <x-app-footer />

    @livewireScripts

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper6 = new Swiper(".mySwiperSlides", {
        loop: true,
        grabCursor: true,
        clickable: true,
        effect: "creative",
        speed: 1000,
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        creativeEffect: {
            prev: {
                shadow: true,
                origin: 'left center',
                translate: ['-10%', 0, -300],
                scale: [0.8, 1], // Shrink the slide during transition
                opacity: [0, 1], // Fade in the slide
            },
            next: {
                origin: 'right center',
                translate: ['10%', 0, -300],
                scale: [1, 0.8], // Enlarge the slide during transition
                opacity: [1, 0], // Fade out the slide
            },
        },
    });
</script>

</html>