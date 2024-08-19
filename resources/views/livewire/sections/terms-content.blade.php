<section class="bg-brand-tlg-five w-full flex justify-center pt-8 pb-12">
    <div>
        @if ($terms != null)  
            <div class="flex flex-col max-w-4xl gap-y-3 md:gap-y-6">
                @foreach ($terms as $term)
                    <div class="mt-4" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="text-brand-green text-center tracking-tight">{{$term->title}}</h4>
                        <div class="mt-8 p-8 border border-stroke max-h-80 overflow-y-auto">
                            <div class="text-basic-black text-sm">
                                {!!$term->description!!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
