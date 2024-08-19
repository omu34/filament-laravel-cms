<section class="pt-8 sm:pt-12 px-8 sm:px-4 xl:px-0 bg-brand-tlg-ten" data-aos="fade-up" data-aos-duration="1000">
    <div class="mx-auto max-w-4xl">
        <div class="pb-4 flex flex-col w-full items-center justify-center">
            @if ($sectiondata != null)
                <div class="max-w-xl pb-4 flex flex-col justify-center items-center gap-y-2">
                    <h2 class="text-brand-green text-center">
                        {{$sectiondata->title}}
                    </h2>
                    <div class="text-basic-black text-left sm:text-center">
                        {!!$sectiondata->description!!}
                    </div>
                </div>
            @endif

            {{-- <div class="flex justify-center items-center flex-col w-full gap-y-6">
                <div class="flex flex-col justify-start items-start w-full">
                    <div class="flex justify-between w-full accordion" onclick="toggleAccordion(this)">
                        <div class="flex w-11/12">
                            <h5 class="text-brand-green cursor-default">
                                Lorem ipsum dolor sit amet consterqeur?
                            </h5>
                        </div>
                    </div>
                    <div class="flex w-full mt-4 panel" style="display: none;">
                        <p class="text-tinted-black">
                            Deserunt anim magna in non. Eu voluptate in et commodo sunt est culpa veniam do dolor pariatur. Non ad anim culpa id mollit sunt ea eiusmod laborum. Exercitation aliqua aliquip occaecat labore sint non pariatur veniam sunt. Laborum laboris anim non aliquip exercitation anim ex velit.
                        </p>
                    </div>
                    <div class="flex w-full pt-4">
                        <hr class="border-solid border-brand-green w-full">
                    </div>
                </div>
                <div class="flex flex-col justify-start items-start w-full">
                    <div class="flex justify-between w-full accordion" onclick="toggleAccordion(this)">
                        <div class="flex w-11/12">
                            <h5 class="text-brand-green cursor-default">
                                Lorem ipsum dolor sit amet consterqeur?
                            </h5>
                        </div>
                    </div>
                    <div class="flex w-full mt-4 panel" style="display: none;">
                        <p class="text-tinted-black">
                            Deserunt anim magna in non. Eu voluptate in et commodo sunt est culpa veniam do dolor pariatur. Non ad anim culpa id mollit sunt ea eiusmod laborum. Exercitation aliqua aliquip occaecat labore sint non pariatur veniam sunt. Laborum laboris anim non aliquip exercitation anim ex velit.
                        </p>
                    </div>
                    <div class="flex w-full pt-4">
                        <hr class="border-solid border-brand-green w-full">
                    </div>
                </div>
            </div> --}}
            
            @if ($faqs != null)
                <div class="max-w-full mx-auto" x-cloak x-data="{
                    items: [
                        @foreach($faqs as $faq)
                            {
                                id: {{$faq->id}},
                                title: '{{$faq->title}}',
                                content: '{!!$faq->description!!}'
                            },
                        @endforeach
                    ], 
                    selected: 1,
                    initializeHeight() {
                        this.$nextTick(() => {
                            this.items.forEach((item, index) => {
                                const container = this.$refs['container' + (index + 1)];
                                if (container) {
                                    container.style.maxHeight = container.scrollHeight + 'px';
                                }
                            });
                        });
                    }
                }" x-init="initializeHeight()">
                    <ul class="accordion">
                        <template x-for="(item, index) in items" :key="index">
                            <li class="relative">
                                <button type="button" 
                                    type="button" 
                                    class="w-full py-6 text-left" 
                                    @click="selected !== item.id ? selected = item.id : selected = null"
                                >
                                    <div class="flex items-center justify-between">
                                        <h5 x-text="item.title" class="text-brand-green cursor-default"></h5>
                                        <h5 class="text-brand-green cursor-default" x-text="selected === item.id ? '-' : '+'"></h5>
                                    </div>
                                </button>
                                
                                <div 
                                    class="relative overflow-hidden transition-all duration-700" 
                                    x-ref="container[index + 1]" 
                                    x-bind:style="selected === item.id ? 'max-height: ' + $refs['container' + (index + 1)]?.scrollHeight + 'px; visibility: visible;' : 'max-height: 0; visibility: hidden;'"
                                >
                                    <div x-text="item.content" class="text-tinted-black mb-4"></div>
                                </div>
                
                                <!-- Conditionally display the green line -->
                                <div class="flex w-full" x-show="index !== items.length - 1">
                                    <hr class="border-solid border-brand-light-green w-full">
                                </div>
                            </li>
                        </template>
                    </ul>
                </div>                                                    
            @endif          
        </div>
    </div>
</section>

