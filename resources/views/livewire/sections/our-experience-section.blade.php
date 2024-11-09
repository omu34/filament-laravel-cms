<!-- Areas of practice  -->
<section class="pt-0 sm:pt-8  sm:pb-10 md:pb-0   px-8 sm:px-4 xl:px-0 " style="background-color: rgb(244, 249, 252)"
    data-aos="fade-up" data-aos-duration="1000">
    <div data-aos="fade-up" class="block sm:hidden md:block">
        {{-- <section class="lg:-mt-10 md:mt-2 sm:mt-16 -mt-16 pt-10 pb-5 "> --}}
        @if ($sectiondata != null)
            <div class="flex justify-start item-1 md:justify-center items-center flex-col md:py-4 ">
                <h1
                    class="text-xl font-bold text-red-900 sm:text-3xl mb-4 font-playfair-l w-fit pb-1 px-2 rounded-md border-b-2 border-red-800 text-center md:text-left">
                    {{ $sectiondata->first()->title }}
                    <span class="text-indigo-900">Experience</span>
                </h1>
                <p class="mt-2 mb-4 text-gray-800 w-3/4 md:w-1/2 font-poppins-b text-center">
                    {!! $sectiondata->first()->description !!}

                </p>
            </div>
        @endif
        {{-- <div class="h-screen-1/2 w-full flex items-center justify-center overflow-hidden ">
                <div class="relative lg:w-[290px] lg:h-[290px] sm:w-[220px] sm:h-[220px] w-[100px] h-[100px] [transform-style:preserve-3d] animate-[rotate_30s_linear_infinite]"
                    style="animation: rotate 30s linear infinite">
                    @foreach ($experiences as $ex)
                        <span style="--i: 1"
                            class="absolute top-0 left-0 w-full h-full origin-center [transform-style:preserve-3d] lg:[transform:rotateY(calc(var(--i)*45deg))_translateZ(350px)] md:[transform:rotateY(calc(var(--i)*45deg))_translateZ(265px)] sm:[transform:rotateY(calc(var(--i)*45deg))_translateZ(216px)] [transform:rotateY(calc(var(--i)*45deg))_translateZ(150px)]">
                            <div
                                class="bg-gray-200 hover:bg-gray-300 hover:text-white mt-8 md:mt-9 transition duration-300 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl rounded overflow-hidden shadow-md">
                                <div class="py-4 px-4 sm:px-6 md:px-8 pb-4 md:mt-0 -mt-4">
                                    <a href="{{ $ex->button_url }} ">
                                        <h1
                                            class="mb-0.5 text-xs sm:text-sm md:text-md font-medium md:font-playfair-l text-red-900">
                                            {{ $ex->name }}
                                        </h1>
                                        <p
                                            class="md:font-poppins-b text-xs text-red-600 hover:text-red-600 font-medium">
                                            {{ $ex->button_text }}
                                            <span class="ml-0.5">&#8594;</span>
                                        </p>
                                        <div class="hidden md:block">
                                            <img src="{{ asset('storage/' . $ex->image) }}"
                                                class="md:w-48 w-32 rounded-lg" />
                                            <hr class="mt-1" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </span>
                    @endforeach
                </div>
            </div> --}}


        <div class=" w-full flex items-center justify-center overflow-hidden ">
            <div class="relative mx-auto max-w-8xl  lg:h-[400px] sm:w-[220px] sm:h-[220px] w-[100px] h-[100px] [transform-style:preserve-3d] animate-[rotate_30s_linear_infinite]"
                style="animation: rotate 30s linear infinite">
                <span style="--i: 1"
                    class="absolute top-0 left-0 w-full h-full origin-center [transform-style:preserve-3d] lg:[transform:rotateY(calc(var(--i)*45deg))_translateZ(350px)] md:[transform:rotateY(calc(var(--i)*45deg))_translateZ(265px)] sm:[transform:rotateY(calc(var(--i)*45deg))_translateZ(216px)] [transform:rotateY(calc(var(--i)*45deg))_translateZ(150px)]">
                    <div
                        class="bg-gray-200 hover:bg-gray-300 hover:text-white mt-8 md:mt-9 transition duration-300 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl rounded overflow-hidden shadow-md">
                        <div class="py-8 px-4 sm:px-6 md:px-8 lg:px-10 pb-4 md:mt-0 -mt-4">
                            <a href="/procurement">
                                <h1
                                    class="mb-0.5 text-xs sm:text-sm md:text-md font-medium md:font-playfair-l text-red-900">
                                    Procurement Law
                                </h1>
                                <p class="md:font-poppins-b text-xs text-red-600 hover:text-red-600 font-medium">
                                    explore
                                    <span class="ml-0.5">&#8594;</span>
                                </p>

                                <!-- For Larger Screens: Show bigger image -->
                                <div class="hidden md:block">
                                    <img src="images/procurement.jpg" class="md:w-48 w-32 rounded-lg" />
                                    <hr class="mt-1" />
                                </div>
                            </a>
                        </div>
                    </div>
                </span>

                <span style="--i: 2"
                    class="absolute top-0 left-0 w-full h-full origin-center [transform-style:preserve-3d] lg:[transform:rotateY(calc(var(--i)*45deg))_translateZ(350px)] md:[transform:rotateY(calc(var(--i)*45deg))_translateZ(265px)] sm:[transform:rotateY(calc(var(--i)*45deg))_translateZ(216px)] [transform:rotateY(calc(var(--i)*45deg))_translateZ(150px)]">
                    <div
                        class="bg-gray-200 hover:bg-gray-300 hover:text-white mt-8 md:mt-9 transition duration-300 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl rounded overflow-hidden shadow-md">
                        <div class="py-4 px-4 sm:px-6 md:px-8 pb-4 md:mt-0 -mt-4">
                            <a href="family.html">
                                <h1
                                    class="mb-0.5 text-xs sm:text-sm md:text-md font-medium md:font-playfair-l text-red-900">
                                    Family Law
                                </h1>
                                <p
                                    class="md:font-poppins-b text-xs text-red-600 hover:text-red-600 font-medium mt-4 md:mt-0">
                                    explore
                                    <span class="ml-0.5">&#8594;</span>
                                </p>

                                <!-- For Larger Screens: Show bigger image -->
                                <div class="hidden md:block">
                                    <img src="images/family.jpg" class="md:w-48 w-32 rounded-lg" />
                                    <hr class="mt-1" />
                                </div>
                            </a>
                        </div>
                    </div>
                </span>

                <span style="--i: 3"
                    class="absolute top-0 left-0 w-full h-full origin-center [transform-style:preserve-3d] lg:[transform:rotateY(calc(var(--i)*45deg))_translateZ(350px)] md:[transform:rotateY(calc(var(--i)*45deg))_translateZ(265px)] sm:[transform:rotateY(calc(var(--i)*45deg))_translateZ(216px)] [transform:rotateY(calc(var(--i)*45deg))_translateZ(150px)]">
                    <div
                        class="bg-gray-200 hover:bg-gray-300 hover:text-white mt-8 md:mt-9 transition duration-300 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl rounded overflow-hidden shadow-md">
                        <div class="py-4 px-4 sm:px-6 md:px-8 pb-4 md:mt-0 -mt-4">
                            <a href="arbitration.html">
                                <h1
                                    class="mb-0.5 text-xs sm:text-sm md:text-md font-medium md:font-playfair-l text-red-900">
                                    Arbitration Law
                                </h1>
                                <p class="md:font-poppins-b text-xs text-red-600 hover:text-red-600 font-medium">
                                    explore
                                    <span class="ml-0.5">&#8594;</span>
                                </p>

                                <!-- For Larger Screens: Show bigger image -->
                                <div class="hidden md:block">
                                    <img src="https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Dispute-Resolution.jpg"
                                        class="md:w-48 w-32 rounded-lg" />
                                    <hr class="mt-1" />
                                </div>
                            </a>
                        </div>
                    </div>
                </span>

                <span style="--i: 4"
                    class="absolute top-0 left-0 w-full h-full origin-center [transform-style:preserve-3d] lg:[transform:rotateY(calc(var(--i)*45deg))_translateZ(350px)] md:[transform:rotateY(calc(var(--i)*45deg))_translateZ(265px)] sm:[transform:rotateY(calc(var(--i)*45deg))_translateZ(216px)] [transform:rotateY(calc(var(--i)*45deg))_translateZ(150px)]">
                    <div
                        class="bg-gray-200 hover:bg-gray-300 hover:text-white mt-8 md:mt-9 transition duration-300 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl rounded overflow-hidden shadow-md">
                        <div class="py-4 px-4 sm:px-6 md:px-8 pb-4 md:mt-0 -mt-4">
                            <a href="commercial.html">
                                <h1
                                    class="mb-0.5 text-xs sm:text-sm md:text-md font-medium md:font-playfair-l text-red-900">
                                    Commercial Law
                                </h1>
                                <p class="md:font-poppins-b text-xs text-red-600 hover:text-red-600 font-medium">
                                    explore
                                    <span class="ml-0.5">&#8594;</span>
                                </p>

                                <!-- For Larger Screens: Show bigger image -->
                                <div class="hidden md:block">
                                    <img src="https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Corporate-Commercial.jpg"
                                        class="md:w-48 w-32 rounded-lg" />
                                    <hr class="mt-1" />
                                </div>
                            </a>
                        </div>
                    </div>
                </span>

                <span style="--i: 5"
                    class="absolute top-0 left-0 w-full h-full origin-center [transform-style:preserve-3d] lg:[transform:rotateY(calc(var(--i)*45deg))_translateZ(350px)] md:[transform:rotateY(calc(var(--i)*45deg))_translateZ(265px)] sm:[transform:rotateY(calc(var(--i)*45deg))_translateZ(216px)] [transform:rotateY(calc(var(--i)*45deg))_translateZ(150px)]">
                    <div
                        class="bg-gray-200 hover:bg-gray-300 hover:text-white mt-8 md:mt-9 transition duration-300 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl rounded overflow-hidden shadow-md">
                        <div class="py-4 px-4 sm:px-6 md:px-8 pb-4 md:mt-0 -mt-4">
                            <a href="interllectial.html">
                                <h1
                                    class="mb-0.5 text-xs sm:text-sm md:text-md font-medium md:font-playfair-l text-red-900">
                                    Interlectial Law
                                </h1>
                                <p class="md:font-poppins-b text-xs text-red-600 hover:text-red-600 font-medium">
                                    explore
                                    <span class="ml-0.5">&#8594;</span>
                                </p>

                                <!-- For Larger Screens: Show bigger image -->
                                <div class="hidden md:block">
                                    <img src="https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Intellectual-Property-.jpg"
                                        class="md:w-48 w-32 rounded-lg" />
                                    <hr class="mt-1" />
                                </div>
                            </a>
                        </div>
                    </div>
                </span>

                <span style="--i: 6"
                    class="absolute top-0 left-0 w-full h-full origin-center [transform-style:preserve-3d] lg:[transform:rotateY(calc(var(--i)*45deg))_translateZ(350px)] md:[transform:rotateY(calc(var(--i)*45deg))_translateZ(265px)] sm:[transform:rotateY(calc(var(--i)*45deg))_translateZ(216px)] [transform:rotateY(calc(var(--i)*45deg))_translateZ(150px)]">
                    <div
                        class="bg-gray-200 hover:bg-gray-300 hover:text-white mt-8 md:mt-9 transition duration-300 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl rounded overflow-hidden shadow-md">
                        <div class="py-4 px-4 sm:px-6 md:px-8 pb-4 md:mt-0 -mt-4">
                            <a href="banking.html">
                                <h1
                                    class="mb-0.5 text-xs sm:text-sm md:text-md font-medium md:font-playfair-l text-red-900">
                                    Finance Law
                                </h1>
                                <p
                                    class="md:font-poppins-b text-xs text-red-600 hover:text-red-600 font-medium mt-4 md:mt-0">
                                    explore
                                    <span class="ml-0.5">&#8594;</span>
                                </p>

                                <!-- For Larger Screens: Show bigger image -->
                                <div class="hidden md:block">
                                    <img src="https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Financial-Services.jpg"
                                        class="md:w-56 w-48 rounded-lg" />
                                    <hr class="mt-1" />
                                </div>
                            </a>
                        </div>
                    </div>
                </span>

                <span style="--i: 7"
                    class="absolute top-0 left-0 w-full h-full origin-center [transform-style:preserve-3d] lg:[transform:rotateY(calc(var(--i)*45deg))_translateZ(350px)] md:[transform:rotateY(calc(var(--i)*45deg))_translateZ(265px)] sm:[transform:rotateY(calc(var(--i)*45deg))_translateZ(216px)] [transform:rotateY(calc(var(--i)*45deg))_translateZ(150px)]">
                    <div
                        class="bg-gray-200 hover:bg-gray-300 hover:text-white mt-8 md:mt-9 transition duration-300 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl rounded overflow-hidden shadow-md">
                        <div class="py-4 px-4 sm:px-6 md:px-8 pb-4 md:mt-0 -mt-4">
                            <a href="environment.html">
                                <h1
                                    class="mb-0.5 text-xs sm:text-sm md:text-md font-medium md:font-playfair-l text-red-900">
                                    Land Law
                                </h1>
                                <p
                                    class="md:font-poppins-b text-xs text-red-600 hover:text-red-600 font-medium mt-4 md:mt-0">
                                    explore
                                    <span class="ml-0.5">&#8594;</span>
                                </p>

                                <!-- For Larger Screens: Show bigger image -->
                                <div class="hidden md:block">
                                    <img src="images/environment.jpg" class="md:w-48 w-32 rounded-lg" />
                                    <hr class="mt-1" />
                                </div>
                            </a>
                        </div>
                    </div>
                </span>

                <span style="--i: 8"
                    class="absolute top-0 left-0 w-full h-full origin-center [transform-style:preserve-3d] lg:[transform:rotateY(calc(var(--i)*45deg))_translateZ(350px)] md:[transform:rotateY(calc(var(--i)*45deg))_translateZ(265px)] sm:[transform:rotateY(calc(var(--i)*45deg))_translateZ(216px)] [transform:rotateY(calc(var(--i)*45deg))_translateZ(150px)]">
                    <div
                        class="bg-gray-200 hover:bg-gray-300 hover:text-white mt-8 md:mt-9 transition duration-300 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl rounded overflow-hidden shadow-md">
                        <div class="py-4 px-4 sm:px-6 md:px-8 pb-4 md:mt-0 -mt-4">
                            <a href="criminal.html">
                                <h1
                                    class="mb-0.5 text-xs sm:text-sm md:text-md font-medium md:font-playfair-l text-red-900">
                                    Criminal Law
                                </h1>
                                <p
                                    class="md:font-poppins-b text-xs text-red-600 hover:text-red-600 font-medium mt-4 md:mt-0">
                                    explore
                                    <span class="ml-0.5">&#8594;</span>
                                </p>

                                <!-- For Larger Screens: Show bigger image -->
                                <div class="hidden md:block">
                                    <img src="images/criminal.jpg" class="md:w-48 w-32 rounded-lg" />
                                    <hr class="mt-1" />
                                </div>
                            </a>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </div>
</section>
