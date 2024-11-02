<!-- Contact us -->

<div data-aos="fade-up" data-aos-duration="1000" >
    <section class="bg-slate-800">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-8">
            @if ($sectiondata != null)
                <div class="mb-4">
                    <div class="mb-2 flex justify-start md:justify-center items-center flex-col">
                        <h1
                            class="text-xl font-bold text-red-900 sm:text-3xl mb-4 font-playfair-l w-fit pb-1 px-2 rounded-md border-b-2 border-red-800 text-center">
                            {{ $sectiondata->title }}
                            <span class="text-indigo-900">Touch</span>
                        </h1>

                        <p
                            class="mx-auto max-w-3xl text-base sm:text-md md:text-xl text-center text-white ">

                            {!! $sectiondata->description !!}
                        </p>
                    </div>
                </div>
                <div class="flex items-stretch justify-center">
                    <div class="grid gap-8 md:grid-cols-2">
                        <div class="h-full pr-6 md:text-left text-center">
                            <p
                                class="mb-6 md:mb-10 md:ml-0 ml-2 text-base sm:text-md text-gray-600 dark:text-slate-400 text-center md:text-left">
                                <!-- We are located at The Hazina Towers 5th floor Wing A Monrovia
                                street, Utalii lane.. -->
                            </p>
                            <ul class="mb-3 md:mb-0 md:ml-0 ml-5 ">
                                <li class="flex mb-4 md:mb-6 lg:mb-10">
                                    <div
                                        class="flex h-12 mt-4 w-12 sm:w-16 sm:h-16 items-center justify-center rounded bg-red-900 text-gray-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 24 24" fill="#995500" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="">
                                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                            <path
                                                d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="ml-4 mt-2">
                                        <h5 class="mb-1 text-md font-medium leading-6 text-white">
                                            {{ $sectiondata->address_title }}
                                        </h5>
                                        <p class="text-sm sm:text-base text-white">
                                            {{ $sectiondata->address_subtitle }}
                                        </p>
                                    </div>
                                </li>
                                <li class="flex mb-4 md:mb-6 lg:mb-10">
                                    <div
                                        class="flex h-12 mt-4 w-12 sm:w-16 sm:h-16 items-center justify-center rounded bg-red-900 text-gray-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 24 24" fill="#995500" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                            <path
                                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                            </path>
                                            <path d="M15 7a2 2 0 0 1 2 2"></path>
                                            <path d="M15 3a6 6 0 0 1 6 6"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4 mt-2">
                                        <h5 class="mb-1 text-md font-medium leading-6 text-white">
                                            {{ $sectiondata->contact_title }}
                                        </h5>
                                        <p class="text-sm sm:text-base text-white">
                                            {{ $sectiondata->contact_subtitle }}
                                        </p>
                                    </div>
                                </li>
                                <li class="flex mb-4">
                                    <div
                                        class="flex h-12 mt-4 w-12 sm:w-16 sm:h-16 items-center justify-center rounded bg-red-900 text-gray-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="#995500" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                            <path d="M12 7v5l3 3"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4 mt-2">
                                        <h5 class="mb-1 text-md font-medium leading-6 text-white">
                                            {{ $sectiondata->hour_title }}
                                        </h5>
                                        <p class="text-sm sm:text-base text-white">
                                            {{ $sectiondata->hour_subtitle }}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card h-fit max-w-6xl p-5 md:p-8" id="form">
                            <h2 class="mb-4 text-2xl font-bold text-white">
                                {{ $sectiondata->form_title }}
                            </h2>
                            <form method="POST" action="views.add_message">
                                <div class="mb-6">
                                    <div class="mx-0 mb-1 sm:mb-4">
                                        <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label>
                                        <input type="text" id="name" autocomplete="given-name"
                                            placeholder="Your name"
                                            class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
                                            name="name" />
                                    </div>
                                    <div class="mx-0 mb-1 sm:mb-4">
                                        <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label>
                                        <input type="email" id="email" autocomplete="email"
                                            placeholder="Your email address"
                                            class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
                                            name="email" />
                                    </div>
                                    <div class="mx-0 mb-1 sm:mb-2">
                                        <label for="texts" class="pb-1 text-xs uppercase tracking-wider"></label>
                                        <textarea id="texts" name="texts" cols="30" rows="4" placeholder="Write your message..."
                                            class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"></textarea>
                                    </div>
                                </div>

                                <button type="submit"
                                    class="w-full bg-[#995500] hover:bg-gray-400 hover:text-gray-600 text-white px-6 py-3 font-xl rounded-md sm:mb-0 sm:px-4 sm:py-2">
                                    {{ $sectiondata->button_text }}
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</div>
