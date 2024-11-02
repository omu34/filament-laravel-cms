{{-- <div data-aos="fade-up" class="mt-40">
    <div class="relative bg-slate-800 pt-4">
        <div class="absolute inset-x-0 bottom-0">
            <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                <path
                    d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
                </path>
            </svg>
        </div>
        @if ($sectiondata != null)
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                    <h2
                        class="mb-6 font-sans text-xl font-bold text-red-900 sm:text-3xl text-center tracking-tight sm:leading-none">
                        {{ $sectiondata->title }} Our Newsletter
                    </h2>
                    <p class="mb-6 text-base text-indigo-200 md:text-md">
                        {!! $sectiondata->description !!}  subscribe to our Newsletter

                    </p>
                    <form class="flex flex-col items-center w-full mb-4 md:flex-row md:px-16">
                        <input id="email-input" placeholder="Email" required="email" type="email"
                            class="flex-grow w-full h-12 px-4 mb-3 text-white transition duration-200 border-2 border-transparent rounded appearance-none md:mr-2 md:mb-0 bg-deep-purple-900 focus:border-teal-accent-700 focus:outline-none focus:shadow-outline" />

                        <button type="submit" id="change-button"
                            class="inline-flex items-center justify-center w-full h-12 px-6 font-semibold tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto hover:text-deep-purple-900 bg-teal-accent-400 hover:bg-teal-accent-700 focus:shadow-outline focus:outline-none">
                            {{ $sectiondata->button_text }} subscribe
                        </button>


                    </form>
                    <p class="max-w-md mb-10 text-xs tracking-wide text-indigo-100 sm:text-sm sm:mx-auto md:mb-16">
                        {{ $sectiondata->bottom }} inquire us
                    </p>

                    <a href="/" aria-label="Scroll down"
                        class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                            fill="currentColor">
                            <path
                                d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        @endif
    </div>
</div> --}}

<!-- Newsletter -->
    <div data-aos="fade-up" class="" data-aos-duration="1000">
        <div class="relative bg-slate-800 pt-4">
            <div class="absolute inset-x-0 bottom-0">
                <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white"
                    preserveAspectRatio="none">
                    <path
                        d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
                    </path>
                </svg>
            </div>
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                    <h2
                        class="mb-6 font-sans text-xl font-bold text-red-900 sm:text-3xl text-center tracking-tight sm:leading-none">
                        Subscribe to our newsletter
                    </h2>
                    <p class="mb-6 text-base text-indigo-200 md:text-md">
                        Our law firm offers expert legal services . With a team of skilled
                        attorneys, we provide personalized guidance and strategic advice
                        to ensure the best possible outcomes for our clients.
                    </p>
                    <form class="flex flex-col items-center w-full mb-4 md:flex-row md:px-16">
                        <input id="email-input" placeholder="Email" required="email" type="email"
                            class="flex-grow w-full h-12 px-4 mb-3 text-white transition duration-200 border-2 border-transparent rounded appearance-none md:mr-2 md:mb-0 bg-deep-purple-900 focus:border-teal-accent-700 focus:outline-none focus:shadow-outline" />

                        <button type="submit" id="change-button"
                            class="inline-flex items-center justify-center w-full h-12 px-6 font-semibold tracking-wide text-gray-200 transition duration-200 rounded shadow-md md:w-auto hover:text-deep-purple-900 bg-teal-accent-400 hover:bg-teal-accent-700 focus:shadow-outline focus:outline-none">
                            Subscribe
                        </button>

                        <script>
                            let button = document.getElementById("change-button");
                            let colors = [
                                "red",
                                "blue",
                                "green",
                                "yellow",
                                "pink",
                                "purple",
                                "gray",
                            ]; //Add more colors from tailwind design pallete as per requirement

                            function changeColor() {
                                let color = colors[Math.floor(Math.random() * colors.length)];
                                button.className = "";
                                button.classList.add(
                                    "px-4",
                                    "py-2",
                                    "rounded-lg",
                                    "text-white",
                                    `bg-${color}-500`
                                );
                            }

                            setInterval(() => {
                                changeColor();
                            }, 500); //Color change duration is 500 ms, you can adjust the duration.
                        </script>
                    </form>
                    <p class="max-w-md mb-10 text-xs tracking-wide text-indigo-100 sm:text-sm sm:mx-auto md:mb-16">
                        subscribe to inquire us
                    </p>
                    <a href="/" aria-label="Scroll down"
                        class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                            fill="currentColor">
                            <path
                                d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
