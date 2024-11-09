<div>

    <div x-data="{ modalOpen: false }">
        <div x-data="{}" x-ref="search" x-show="modalOpen" class="fixed inset-0 z-50 overflow-y-auto"
            aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex min-h-full items-center justify-center p-4 text-center">
                <div x-cloak @click="modalOpen = false" x-show="modalOpen"
                    x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                </div>

                <div class="relative bg-white border-solid border-2 border-red-800 rounded-lg mx-auto max-w-3xl pt-4 pb-10 px-4"
                    x-data="{}" x-cloak x-show="modalOpen"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <div class="flex items-center space-x-4 justify-end">
                        <button type="button" @click="modalOpen = false" class="hover:opacity-80">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.55558 15.9998C3.55558 9.14409 9.14427 3.55539 16 3.55539C22.8558 3.55539 28.4445 9.14409 28.4445 15.9998C28.4445 22.8556 22.8558 28.4443 16 28.4443C9.14427 28.4443 3.55558 22.8556 3.55558 15.9998ZM19.7734 21.6621C20.2497 21.6621 20.7331 21.4839 21.1086 21.1084C21.8424 20.3746 21.8424 19.1718 21.1086 18.438L18.6704 15.9998L21.1086 13.5617C21.8424 12.8279 21.8424 11.6251 21.1086 10.8913C20.3748 10.1575 19.1719 10.1575 18.4381 10.8913L16 13.3294L13.5619 10.8913C12.8281 10.1575 11.6253 10.1575 10.8915 10.8913C10.1577 11.6251 10.1577 12.8279 10.8915 13.5617L13.3296 15.9998L10.8915 18.438C10.1577 19.1718 10.1577 20.3746 10.8915 21.1084C11.267 21.4839 11.7503 21.6621 12.2267 21.6621C12.703 21.6621 13.1864 21.4839 13.5619 21.1084L16 18.6702L18.4381 21.1084C18.8136 21.4839 19.297 21.6621 19.7734 21.6621Z"
                                    fill="#CA4B3D" stroke="#CA4B3D" stroke-width="1.77778" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-full flex flex-col justify-start items-start gap-4 pt-4 px-8  ">
                        <div class="w-full flex flex-col sm:flex-row justify-start items-start gap-8">
                            {{-- <div class="w-full sm:w-1/2 grid gap-4 justify-items-start">
                                <h4 class="text-brand-green tracking-tighter">Loan Calculator</h4>
                                <p class="text-left text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <form action="" class="grid grid-cols-1 gap-x-6 gap-y-6 w-full">
                                    <div class="grid grid-cols-1 gap-2">
                                        <label class="text-left" for="fname">Loan amount <span class="text-required-red">*</span></label>
                                        <input type="number" name="amount" id="amount" placeholder="KSH.">
                                    </div>
                                    <div class="grid grid-cols-1 gap-2 custom-select">
                                        <label class="text-left" for="term">Loan term in years <span class="text-required-red">*</span></label>
                                        <select name="term" autocomplete="term">
                                            <option value="" disabled selected style="color: #A0AEC0;">Select loan term</option>
                                            <option value="2 years">2 years</option>
                                        </select>
                                    </div>
                                    <div class="w-full flex justify-center sm:justify-start">
                                        <div class="w-48 min-w-fit sm:w-1/2 px-4 py-2 flex items-center justify-center rounded-lg bg-brand-light-green hover:bg-brand-green text-white border-2 shadow-md">
                                            <button type="submit" class="text-sm">
                                                Calculate
                                            </button>
                                            <svg class="pl-2" width="25" height="25" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                                                <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                                            </svg>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="w-full sm:w-1/2 grid justify-center sm:justify-start text-center sm:text-left grid-cols-1 gap-5">
                                <div class="grid grid-cols-1 gap-1">
                                    <p class="text-sm font-bold lg:text-base">Amount Requested</p>
                                    <h5 class="text-brand-dark-green">KES. 1,500,200</h5>
                                </div>
                                <div class="grid grid-cols-1 gap-1">
                                    <p class="text-sm font-bold lg:text-base">Estimated Monthly Repayment</p>
                                    <h5 class="text-brand-dark-green">KES. 45,235</h5>
                                </div>
                                <div class="grid grid-cols-1 gap-1">
                                    <p class="text-sm font-bold lg:text-base">Total Interest Paid (21% rate)</p>
                                    <h5 class="text-brand-dark-green">KES. 754,238</h5>
                                </div>
                                <div class="grid grid-cols-1 gap-1">
                                    <p class="text-sm font-bold lg:text-base">Loan Duration</p>
                                    <h5 class="text-brand-dark-green">4 years</h5>
                                </div>
                                <div class="w-full flex items-center justify-center sm:justify-start">
                                    <div class="w-fit px-4 py-2 flex items-center justify-start rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md">
                                        <a href="/start-application" class="text-sm hover:opacity-100">
                                            Start Application
                                        </a>
                                        <svg class="pl-2" width="25" height="25" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                                            <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <section class="bg-white w-full flex justify-center   p-8 sm:px-4 sm:py-12"
                                data-aos="fade-up" data-aos-duration="1000">
                                @if ($sectiondata != null) --}}
                                    {{-- <div
                                        class=""> --}}
                                        <div class="w-full sm:w-1/2 grid gap-4 justify-items-start">
                                            <h2
                                                class="text-xl font-md text-red-900 sm:text-xl border-b-2 pb-1 px-2 rounded-md border-red-800 w-fit">
                                                {{-- {{ $sectiondata->title }}  --}}
                                                Masika And Koross
                                                <span class="text-indigo-900">Advocates.</span>
                                            </h2>
                                            <p class="text-md mt-2 text-sm text-gray-900 md:text-base font-poppins-b">
                                                {{-- {!! $sectiondata->description !!} --}}
                                                We are a company since 2007
                                            </p>
                                            <div class="mt-8 flex">

                                                <a href="
                                                {{-- {{ $sectiondata->button_url }} --}}
                                                /About
                                                 "
                                                    class="text-blue-500 hover:text-blue-600 font-medium">
                                                    {{-- {{ $sectiondata->button_text }} --}} Learn More
                                                </a>

                                                <span class="ml-2 mt-1.5"><svg class="animate-pulse" height="16px"
                                                        width="16px" version="1.1" id="Layer_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                                        xml:space="preserve">
                                                        <path style="fill:#FFFFFF;"
                                                            d="M256,504C119.248,504,8,392.752,8,256S119.248,8,256,8s248,111.248,248,248S392.752,504,256,504z" />
                                                        <path style="fill:#8AD5DD;"
                                                            d="M256,16c132.336,0,240,107.664,240,240S388.336,496,256,496S16,388.336,16,256S123.664,16,256,16
                                                                        M256,0C114.608,0,0,114.608,0,256c0,141.376,114.608,256,256,256s256-114.624,256-256C512,114.608,397.392,0,256,0L256,0z" />
                                                        <polygon style="fill:#DB2B42;"
                                                            points="214.656,95.936 378.016,256 214.656,416.064 165.856,366.096 278.208,256 165.856,145.904
                                                                        	" />
                                                    </svg>
                                                </span>

                                            </div>
                                        </div>
                                        <div class="w-full sm:w-1/2 grid justify-center sm:justify-start text-center sm:text-left grid-cols-1 gap-5">
                                            <img src="{{ asset('about-us.jpg')}}
                                            {{-- {{ asset('storage/' . $sectiondata->image) }} --}}
                                             " alt="About Us Image"
                                                class="rounded-lg h-fit w-auto shadow-md" />
                                        </div>
                                    {{-- </div> --}}
                                {{-- @endif --}}
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="fixed bottom-5 md:bottom-8 right-5 md:right-32 z-[40]" x-on:click="modalOpen = !modalOpen">
            <div
                class="px-4 py-2 w-full flex items-center justify-center rounded-lg bg-red-800 hover:opacity-80 text-white border-2 border-red-500 shadow-md">
                <button type="button" class="text-sm">
                    About Us
                </button>
                <svg class="ml-1" width="16" height="15" viewBox="0 0 16 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4"
                        d="M12.5 16H6.5C4.70614 16 3.25 14.5439 3.25 12.75V5.25C3.25 3.45614 4.70614 2 6.5 2H12.5C14.2939 2 15.75 3.45614 15.75 5.25V12.75C15.75 14.5439 14.2939 16 12.5 16Z"
                        fill="white" stroke="white" />
                    <path
                        d="M11.7498 4.2825H7.24984C6.47734 4.2825 5.83984 4.9125 5.83984 5.6925V6.4425C5.83984 7.215 6.46984 7.8525 7.24984 7.8525H11.7498C12.5223 7.8525 13.1598 7.2225 13.1598 6.4425V5.6925C13.1598 4.9125 12.5298 4.2825 11.7498 4.2825Z"
                        fill="white" />
                    <path
                        d="M6.6198 11.19C6.5148 11.19 6.4173 11.1675 6.3273 11.13C6.2373 11.0925 6.1548 11.04 6.0873 10.9725C5.9448 10.83 5.8623 10.6425 5.8623 10.44C5.8623 10.3425 5.8848 10.245 5.9223 10.155C5.9598 10.0575 6.0123 9.98249 6.0873 9.90749C6.2598 9.73499 6.5223 9.65249 6.7623 9.70499C6.8073 9.71249 6.8598 9.72749 6.9048 9.74999C6.9498 9.76499 6.9948 9.78749 7.0323 9.81749C7.0773 9.83999 7.1148 9.87749 7.1448 9.90749C7.2123 9.98249 7.2723 10.0575 7.3098 10.155C7.3473 10.245 7.3623 10.3425 7.3623 10.44C7.3623 10.6425 7.2873 10.83 7.1448 10.9725C7.0023 11.115 6.8148 11.19 6.6198 11.19Z"
                        fill="white" />
                    <path
                        d="M9.6123 11.19C9.4173 11.19 9.2298 11.115 9.0873 10.9725C8.9448 10.83 8.8623 10.6425 8.8623 10.44C8.8623 10.245 8.9448 10.05 9.0873 9.9075C9.3648 9.63 9.8673 9.63 10.1448 9.9075C10.2123 9.9825 10.2723 10.0575 10.3098 10.155C10.3473 10.245 10.3623 10.3425 10.3623 10.44C10.3623 10.6425 10.2873 10.83 10.1448 10.9725C10.0023 11.115 9.8148 11.19 9.6123 11.19Z"
                        fill="white" />
                    <path
                        d="M12.6123 11.19C12.4173 11.19 12.2298 11.115 12.0873 10.9725C11.9448 10.83 11.8623 10.6425 11.8623 10.44C11.8623 10.245 11.9448 10.05 12.0873 9.9075C12.3648 9.63 12.8673 9.63 13.1448 9.9075C13.2873 10.05 13.3698 10.245 13.3698 10.44C13.3698 10.5375 13.3473 10.635 13.3098 10.725C13.2723 10.815 13.2198 10.8975 13.1448 10.9725C13.0023 11.115 12.8148 11.19 12.6123 11.19Z"
                        fill="white" />
                    <path
                        d="M6.6198 14.19C6.4173 14.19 6.2298 14.115 6.0873 13.9725C5.9448 13.83 5.8623 13.6425 5.8623 13.44C5.8623 13.245 5.9448 13.05 6.0873 12.9075C6.1548 12.84 6.2373 12.7875 6.3273 12.75C6.5148 12.675 6.7173 12.675 6.9048 12.75C6.9498 12.765 6.9948 12.7875 7.0323 12.8175C7.0773 12.84 7.1148 12.8775 7.1448 12.9075C7.2873 13.05 7.3698 13.245 7.3698 13.44C7.3698 13.6425 7.2873 13.83 7.1448 13.9725C7.0023 14.115 6.8148 14.19 6.6198 14.19Z"
                        fill="white" />
                    <path
                        d="M9.6123 14.19C9.4173 14.19 9.2298 14.115 9.0873 13.9725C8.9448 13.83 8.8623 13.6425 8.8623 13.44C8.8623 13.3875 8.86981 13.3425 8.87731 13.29C8.89231 13.245 8.9073 13.2 8.9223 13.155C8.9448 13.11 8.9673 13.065 8.9898 13.02C9.0198 12.9825 9.0498 12.945 9.0873 12.9075C9.1548 12.84 9.23731 12.7875 9.32731 12.75C9.60481 12.6375 9.9348 12.6975 10.1448 12.9075C10.2873 13.05 10.3623 13.245 10.3623 13.44C10.3623 13.6425 10.2873 13.83 10.1448 13.9725C10.0773 14.04 9.9948 14.0925 9.9048 14.13C9.8148 14.1675 9.7173 14.19 9.6123 14.19Z"
                        fill="white" />
                    <path
                        d="M12.6126 14.19C12.5151 14.19 12.4176 14.1675 12.3276 14.13C12.2376 14.0925 12.1551 14.04 12.0876 13.9725C11.9451 13.83 11.8701 13.6425 11.8701 13.44C11.8701 13.245 11.9451 13.05 12.0876 12.9075C12.2901 12.6975 12.6276 12.6375 12.9051 12.75C12.9951 12.7875 13.0776 12.84 13.1451 12.9075C13.2876 13.05 13.3626 13.245 13.3626 13.44C13.3626 13.6425 13.2876 13.83 13.1451 13.9725C13.0026 14.115 12.8151 14.19 12.6126 14.19Z"
                        fill="white" />
                </svg>
            </div>
        </div>
    </div>

</div>
