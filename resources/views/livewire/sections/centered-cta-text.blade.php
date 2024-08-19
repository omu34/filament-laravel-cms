
<section class="bg-brand-tlg-five w-full flex justify-center p-8 sm:px-4 sm:py-12" data-aos="fade-up" data-aos-duration="1000">
    @if ($sectiondata != null)
        <div class="flex flex-col max-w-4xl h-full gap-y-3 md:gap-y-6">
            <h2 class="text-brand-green text-center tracking-tight">{{$sectiondata->title}}</h2>
            <div>
                <div class="text-basic-black">{!!$sectiondata->description!!}</div>
            </div>
        </div>
    @endif
</section>
