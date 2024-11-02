<!-- counting tailwind css -->
{{-- <div data-aos="fade-up" class="">
    <div id="countingSection"
    @if ($sectiondata != null)
        class="sticky top-0 mb-1 mt-1 h-screen-1/2 flex flex-col items-center justify-center sm:bg-gray-600 bg-no-repeat bg-cover bg-[url({{asset('storage/'. $sectiondata->image) }})] ">

            <div class="mb-2">
                <div class="pt-12 sm:pt-20 mx-auto max-w-7xl">
                    <div class="flex items-center justify-center md:-mt-12 mb-8">
                        <h1
                            class="text-xl font-bold text-red-900 sm:text-3xl mb-4 font-playfair-l w-fit pb-1 px-2 rounded-md border-b-2 border-red-800 text-center md:text-left">
                            {{ $sectiondata->main_title }}
                            <span class="text-indigo-900">Services</span>
                        </h1>
                    </div>

                    <div class="pb-12 mt-8 sm:pb-16">
                        <div class="relative">
                            <div class="absolute inset-0 h-1/2"></div>
                            <div class="relative px-4 mx-auto sm:px-6 lg:px-8">
                                <div class="max-w-7xl mx-auto">
                                    <dl class="bg-transparent rounded-lg sm:grid sm:grid-cols-3 gap-4">
                                        <div
                                            class="flex flex-col p-6 text-center border-gray-100 dark:border-gray-700 sm:border-0">
                                            <dt class="order-2 mt-2 uppercase text-md md:text-2xl text-yellow-600 font-bold font-poppins-b leading-6"
                                                id="item-1">
                                                {{ $sectiondata->subtitle1 }}
                                            </dt>
                                            <dd class="order-1 text-5xl font-extrabold font-poppins-b leading-none text-red-900"
                                                aria-describedby="item-1" id="starsCount">
                                                0
                                            </dd>
                                        </div>
                                        <div
                                            class="flex flex-col p-6 text-center border-gray-100 dark:border-gray-700 sm:border-0">
                                            <dt
                                                class="order-2 mt-2 text-md md:text-2xl text-yellow-600 uppercase font-bold font-poppins-b leading-6">
                                                {{ $sectiondata->subtitle2 }}
                                            </dt>
                                            <dd class="order-1 text-5xl font-extrabold leading-none font-poppins-b text-red-900"
                                                id="downloadsCount">
                                                0
                                            </dd>
                                        </div>
                                        <div class="flex flex-col p-6 text-center border-gray-100 dark:border-gray-700">
                                            <dt
                                                class="order-2 mt-2 text-md md:text-2xl text-yellow-600 uppercase font-bold font-poppins-b leading-6">
                                                {{ $sectiondata->subtitle3 }}
                                            </dt>
                                            <dd class="order-1 text-5xl font-extrabold leading-none font-poppins-b text-red-900"
                                                id="sponsorsCount">
                                                0
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div> --}}

<div data-aos="fade-up" class="" data-aos-duration="1000" data-aos="fade-up">
    <div id="countingSection"
        class="sticky mb-1 top-0 mt-1 h-screen-1/2 flex flex-col items-center justify-center sm:bg-gray-600 bg-no-repeat bg-cover bg-[url('/public/images/counter.jpg')] ">
        <!-- sticky top-1 -->
        <div class="mb-2">
            <div class="pt-12 sm:pt-20 mx-auto max-w-7xl">
                <div class="flex items-center justify-center md:-mt-12 mb-8">
                    <h1
                        class="text-xl font-bold text-red-900 sm:text-3xl mb-4 font-playfair-l w-fit pb-1 px-2 rounded-md border-b-2 border-red-800 text-center md:text-left">
                        We provide Quality
                        <span class="text-indigo-900">Services</span>
                    </h1>
                </div>

                <div class="pb-12 mt-8 sm:pb-16">
                    <div class="relative">
                        <div class="absolute inset-0 h-1/2"></div>
                        <div class="relative px-4 mx-auto sm:px-6 lg:px-8">
                            <div class="max-w-7xl mx-auto">
                                <dl class="bg-transparent rounded-lg sm:grid sm:grid-cols-3 gap-4">
                                    <div
                                        class="flex flex-col p-6 text-center border-gray-100 dark:border-gray-700 sm:border-0">
                                        <dt class="order-2 mt-2 uppercase text-md md:text-2xl text-yellow-600 font-bold font-poppins-b leading-6"
                                            id="item-1">
                                            Satisfied Clients
                                        </dt>
                                        <dd class="order-1 text-5xl font-extrabold font-poppins-b leading-none text-red-900"
                                            aria-describedby="item-1" id="starsCount">
                                            0
                                        </dd>
                                    </div>
                                    <div
                                        class="flex flex-col p-6 text-center border-gray-100 dark:border-gray-700 sm:border-0">
                                        <dt
                                            class="order-2 mt-2 text-md md:text-2xl text-yellow-600 uppercase font-bold font-poppins-b leading-6">
                                            Successful cases
                                        </dt>
                                        <dd class="order-1 text-5xl font-extrabold leading-none font-poppins-b text-red-900"
                                            id="downloadsCount">
                                            0
                                        </dd>
                                    </div>
                                    <div class="flex flex-col p-6 text-center border-gray-100 dark:border-gray-700">
                                        <dt
                                            class="order-2 mt-2 text-md md:text-2xl text-yellow-600 uppercase font-bold font-poppins-b leading-6">
                                            Jobs Done
                                        </dt>
                                        <dd class="order-1 text-5xl font-extrabold leading-none font-poppins-b text-red-900"
                                            id="sponsorsCount">
                                            0
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
