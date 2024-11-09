<section class="pt-0 sm:pt-8 pb-8 sm:pb-16 px-8 sm:px-4 xl:px-0 bg-white" data-aos="fade-up" data-aos-duration="1000">

    <div class="mx-auto max-w-6xl">
        @if ($sectiondata != null)
            <div class="w-full pb-8 flex flex-col justify-start items-start gap-y-2">
                <h2 class="text-brand-green">{{$sectiondata->title}}</h2>
                <div class="text-basic-black">
                    {!!$sectiondata->description!!}
                </div>
            </div>
        @endif
        @if ($products != null)
            <div x-cloak>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
                    @foreach ($products as $product)
                        <a href="#" class="h-full">

                            <div class="flex flex-col justify-start items-start border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-4 p-10 h-full">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset($product->icon) }}" alt="asset icon">
                                </div>
                                <div class="flex justify-start items-start mt-2 flex-grow">
                                    <h5 class="text-basic-black">{{$product->title}}</h5>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

</section>
