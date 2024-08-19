<section class="bg-brand-tlg-ten" data-aos="fade-up" data-aos-duration="1000">
    <div class="flex flex-col sm:flex-row w-full">
        @if ($sectiondata != null)
            <div class="w-full md:w-1/2 flex flex-col items-center justify-center">
                <div class="flex flex-col max-w-md gap-y-3 md:gap-y-6 pt-0 pb-8 sm:py-12 px-8 sm:px-4 xl:px-0">
                    <h2 class="text-brand-green text-center md:text-left tracking-tight">
                        {{$sectiondata->title}}
                    </h2>
                    <div>
                        <div class="text-basic-black">{!!$sectiondata->description!!}</div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 bg-cover bg-top min-h-72" style="background-image: url('{{ asset($sectiondata->image) }}');"></div>
        @endif
    </div>
</section>

