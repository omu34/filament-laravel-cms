<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./css/area-practice.css">
    <title>{{ config('app.name', 'Masika & Koross') }}</title>
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

        <!-- whatsapp chat -->
        <div class="fixed bottom-20 right-2 z-50 animate-bounce">
            <a href="https://wa.me/254727464224" class="" target="_blank">
                <svg fill="#000000" width="60px" height="60px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                    class="icon w-12 h-12">
                    <path fill="#25D366"
                        d="M16 0C7.163 0 0 7.163 0 16c0 2.821.734 5.479 2.015 7.82L0 32l8.406-2.016A15.943 15.943 0 0016 32c8.837 0 16-7.163 16-16S24.837 0 16 0zm9.705 23.87c-.371 1.043-2.178 1.979-3.043 2.068-.784.077-1.785.108-2.872-.17-.663-.158-1.514-.49-2.61-1.002-4.57-2.104-7.536-6.878-7.77-7.203-.232-.325-1.86-2.48-1.86-4.73 0-2.25 1.177-3.349 1.591-3.814.371-.433.981-.651 1.571-.651.188 0 .358.01.507.018.446.019.668.03.961.744.371.902 1.264 3.125 1.37 3.348.106.222.177.481.032.775-.148.302-.222.482-.444.74-.223.26-.468.58-.67.78-.22.228-.448.476-.195.924.252.447 1.118 1.836 2.4 2.976 1.653 1.472 3.033 1.932 3.501 2.147.467.215.744.195 1.02-.117.276-.312 1.178-1.338 1.332-1.611.154-.272.221-.453.443-.744.223-.291.444-.3.743-.204.3.096 1.888.89 2.211 1.048.325.16.556.235.638.364.083.13.083.75-.29 1.793z" />
                </svg>
            </a>
        </div>
    </main>



    <x-app-footer />

    @livewireScripts




</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="./js/area-practice.js"></script>
<script src="./js/masika-team.js"></script>
<script src="./js/counter.js"></script>
<script src="./js/newsletter.js"></script>
<script src="./js/scroll-to-top.js"></script>


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
