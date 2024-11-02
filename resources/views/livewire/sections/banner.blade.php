<section>
    <div class="pt-32 -mt-16 swiper mySwiperSlides">
        @if ($sectiondata != null)
            <div class="swiper-wrapper">
                @foreach ($sectiondata as $section)
                    <div class="swiper-slide relative w-full h-[350px] sm:h-[450px] lg:h-[500px] bg-cover bg-top"
                        style="background-image: url('{{asset('storage/' . $section->image)  }}')">
                        <div class="absolute inset-0 bg-black opacity-45"></div>
                        <div class="text-white relative w-full h-full px-16 lg:px-64 py-10 sm:py-28 lg:py-48">
                            <div class="flex flex-col items-start justify-center h-full gap-3 md:gap-6">
                                <h1>{{ $section->title }}</h1>
                                <div class="text-white">{!! $section->description !!}</div>
                                <a href="{{ $section->button_url }}"
                                    class="bg-purple-800 py-3 px-6 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">
                                    {{ $section->button_text }} <span class="ml-2">&#8594;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        @if (count($sectiondata) > 1)
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        @endif
    </div>
</section>

