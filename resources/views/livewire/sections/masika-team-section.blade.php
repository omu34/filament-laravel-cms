<!-- Masika & Koross Team -->
<div data-aos="fade-up" class="z-20 sticky top-0 mb-1 mt-1 h-screen-1/2" data-aos-duration="1000">
    <div style="background-color: rgb(247, 252, 255)"
        class="overflow-x-hidden z-20 sticky top-0 mb-1 h-screen-1/8 flex flex-col items-center justify-center bg-purple-100">

        <div class="pt-10 pb-10 md:pt-16 mx-auto w-full px-4 sm:px-6 md:px-8 max-w-7xl">
            <div class="text-center md:text-left">
                @if ($sectiondata != null)
                    <h1
                        class="text-xl font-bold text-red-900 sm:text-3xl mb-4 font-playfair-l w-fit pb-1 px-2 rounded-md border-b-2 border-red-800 text-center md:text-left">
                        {{ $sectiondata->title }}
                        <span class="text-indigo-900">Team</span>
                    </h1>

                    <p class="mt-3 max-w-2xl text-left text-sm sm:text-md md:text-md text-black sm:mt-4">
                       {!!$sectiondata->description!!}

                    </p>
            </div>
            @endif

            <div x-data="swipeCards()" x-init="let isDown = false;
            let startX;
            let scrollLeft;
            $el.addEventListener('mousedown', (e) => {
                isDown = true;
                startX = e.pageX - $el.offsetLeft;
                scrollLeft = $el.scrollLeft;
            });
            $el.addEventListener('mouseleave', () => {
                isDown = false;
            });
            $el.addEventListener('mouseup', () => {
                isDown = false;
            });
            $el.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - $el.offsetLeft;
                const walk = (x - startX) * 1;
                $el.scrollLeft = scrollLeft - walk;
            });"
                class="overflow-x-scroll scrollbar-hide mb-4 relative w-full mx-auto max-w-7xl"
                style="overflow-y: hidden">
                <div data-aos="" class="flex snap-x snap-mandatory md:gap-6 gap-10" style="width: max-content">
                    <template x-for="card in cards" :key="card.id">
                        <div
                            class="flex-none w-40 sm:w-48 snap-center bg-gray-200 rounded-lg shadow-md p-5 my-6 text-center transition-transform duration-500 transform ease-in-out hover:scale-110">
                            <img :src="card.image" alt="Team Member 1" class="w-full h-auto rounded-full mb-4" />
                            <h3 class="text-md sm:text-xl font-semibold mb-2" x-text="card.title"></h3>
                            <p class="text-red-900 text-sm font-medium" x-text="card.description"></p>
                            <a :href="card.link">
                                <img src="images/email.png" class="rounded-full h-8 border-2 hover:border-red-600"
                                    alt="" />
                            </a>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>
