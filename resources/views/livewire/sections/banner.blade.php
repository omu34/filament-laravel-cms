<section>
    <div class="pt-16 swiper mySwiperSlides">
        @if ($sectiondata != null)
            <div class="swiper-wrapper">
                @foreach($sectiondata as $section)
                    <div class="swiper-slide relative w-full h-[300px] sm:h-[400px] lg:h-[450px] bg-cover bg-top" style="background-image: url('{{ asset($section->image) }}')">
                        <div class="absolute inset-0 bg-black opacity-65"></div>
                        <div class="text-white relative w-full h-full px-16 lg:px-64 py-10 sm:py-28 lg:py-48">
                            <div class="flex flex-col items-start justify-center h-full gap-3 md:gap-6">
                                <h1>{{$section->title}}</h1>
                                <div class="text-white">{!!$section->description!!}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        @if( count($sectiondata) > 1)
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        @endif
    </div>
</section>
