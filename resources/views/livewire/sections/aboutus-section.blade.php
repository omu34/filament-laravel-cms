<!-- About Us Section -->
<section class="bg-white w-full flex justify-center z-20  p-8 sm:px-4 sm:py-12" data-aos="fade-up"
    data-aos-duration="1000">
    @if ($sectiondata != null)
        <div
            class="grid grid-cols-1 md:grid-cols-2   items-center gap-8 mx-auto max-w-7xl py-16 sm:py-4 px-4 sm:px-6 lg:px-8 mb-10">
            <div class="">
                <h2
                    class="text-xl font-bold text-red-900 sm:text-2xl border-b-2 pb-1 px-2 rounded-md border-red-800 w-fit">
                    {{ $sectiondata->title }}
                    <span class="text-indigo-900">Advocates.</span>
                </h2>
                <p class="text-md mt-2 text-sm text-gray-900 md:text-base font-poppins-b">
                    {!! $sectiondata->description !!}
                </p>
                <div class="mt-8 flex">

                    <a href="{{ $sectiondata->button_url }}" class="text-blue-500 hover:text-blue-600 font-medium">
                        {{ $sectiondata->button_text }}
                    </a>

                    <span class="ml-2 mt-1.5"><svg class="animate-pulse" height="16px" width="16px" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <path style="fill:#FFFFFF;"
                                d="M256,504C119.248,504,8,392.752,8,256S119.248,8,256,8s248,111.248,248,248S392.752,504,256,504z" />
                            <path style="fill:#8AD5DD;"
                                d="M256,16c132.336,0,240,107.664,240,240S388.336,496,256,496S16,388.336,16,256S123.664,16,256,16
                                                                        M256,0C114.608,0,0,114.608,0,256c0,141.376,114.608,256,256,256s256-114.624,256-256C512,114.608,397.392,0,256,0L256,0z" />
                            <polygon style="fill:#DB2B42;"
                                points="214.656,95.936 378.016,256 214.656,416.064 165.856,366.096 278.208,256 165.856,145.904" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="mt-12 md:mt-0 ">
                <img src="{{ asset('storage/' . $sectiondata->image) }}" alt="About Us Image"
                    class="rounded-lg h-fit w-auto shadow-md" />
            </div>
        </div>
    @endif
</section>
