<!-- Start of header -->
<header class="bg-gray-300 fixed z-20 inset-x-0">

    <nav class="mx-auto flex lg:max-w-7xl items-center justify-between p-4 lg:px-6">
        <div class="flex items-center gap-x-6">
            <a href="/">
                {{-- <img src="{{ asset('images/coop-logo.png') }}" alt="Asset finance logo" class="w-3/4 md:w-full"> --}}

                <img width="314" height="20"
                    src="https://www.masikakoross.com/wp-content/uploads/2022/02/cropped-rsz_mk_letterhead_1-removebg-preview.png"
                    class="bg-gray-200 rounded-lg custom-logo   pl-1 pr-1 transition-transform duration-500 transform ease-in-out hover:scale-110"
                    alt="https://www.masikakoross.com/wp-content/uploads/2022/02/cropped-rsz_mk_letterhead_1-removebg-preview.png">

            </a>

            @auth
                <div class="hidden lg:flex gap-x-6">
                    @if (auth()->user()->type != 'admin')
                        <a
                            href="{{ auth()->user()->type == 'agent'
                                ? route('agents.dashboard')
                                : (auth()->user()->type == 'dealer'
                                    ? route('dealers.dashboard')
                                    : route('customers.dashboard')) }}">
                            <p class="text-red-800 text-sm">Dashboard</p>
                        </a>
                    @else
                        <div class="hidden lg:flex gap-x-6">
                            @foreach ($pages->sortBy('order') as $page)
                                <a href="/{{ $page->slug }}">
                                    <p class="text-red-800 text-sm">{{ $page->name }}</p>
                                </a>
                            @endforeach
                        </div>
                    @endif
                    {{-- <div x-data="{
        navigationMenuOpen: false,
        navigationMenu: '',
        navigationMenuCloseDelay: 200,
        navigationMenuCloseTimeout: null,
        navigationMenuLeave() {
            let that = this;
            this.navigationMenuCloseTimeout = setTimeout(() => {
                that.navigationMenuClose();
            }, this.navigationMenuCloseDelay);
        },
        navigationMenuReposition(navElement) {
            this.navigationMenuClearCloseTimeout();
            this.$refs.navigationDropdown.style.left = navElement.offsetLeft + 'px';
            this.$refs.navigationDropdown.style.marginLeft = (navElement.offsetWidth / 2) + 'px';
        },
        navigationMenuClearCloseTimeout() {
            clearTimeout(this.navigationMenuCloseTimeout);
        },
        navigationMenuClose() {
            this.navigationMenuOpen = false;
            this.navigationMenu = '';
        }
    }"
        class="fixed md:top-1 left-0 right-0  w-full  mx-auto rounded-lg  h-16  border-b border-gray-200">

        <div class="relative w-full flex items-center justify-center px-4 py-2">
            <ul
                class="flex items-center justify-center p-1 space-x-1 list-none md:mt-    rounded-md text-red-800 group ">


                <li>
                    <button
                        :class="{ 'bg-neutral-100': navigationMenu=='learn-more', 'hover:bg-neutral-100': navigationMenu!='learn-more' }"
                        @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='learn-more'"
                        @mouseleave="navigationMenuLeave()"
                        class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-neutral-100 group w-max">
                        <span class="text-md md:text-lg">Learn More</span>
                        <svg :class="{ '-rotate-180': navigationMenuOpen == true && navigationMenu == 'learn-more' }"
                            class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                </li>

            </ul>
        </div>
        <div x-ref="navigationDropdown" x-show="navigationMenuOpen"
            x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
            @mouseover="navigationMenuClearCloseTimeout()" @mouseleave="navigationMenuLeave()"
            class="absolute top-0 pt-3 duration-200 ease-out -translate-x-1/2 translate-y-11" x-cloak>

            <div
                class="flex justify-center w-auto h-auto overflow-hidden bg-white border rounded-md shadow-sm border-neutral-200/70">
                <div x-show="navigationMenu == 'learn-more'" class="flex items-stretch justify-center w-full p-6">
                    <div class="w-72">
                        <a href="#_" @click="navigationMenuClose()"
                            class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                            <span class="group">
                                <button
                                    class='block py-2 px-3 md:text-2xl text-lg  md:font-bold font-medium text-red-900 rounded hover:bg-pink-800 md:hover:bg-transparent  '
                                    href='' onclick="scrollToSection('section5')">Partners</button>
                                <div class="w-0 group-hover:w-full h-0.5 bg-white ease-in-out duration-500"></div>
                            </span>
                            <span class="block font-light leading-5 opacity-50">This how our partners say about our
                                general help to the community.</span>
                        </a>
                        <a href="#_" @click="navigationMenuClose()"
                            class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                            <span class="group">
                                <button
                                    class='block py-2 px-3 md:text-2xl text-lg  md:font-bold font-medium text-red-900 rounded hover:bg-pink-800 md:hover:bg-transparent  '
                                    href='' onclick="scrollToSection('section3')">Resources</button>
                                <div class="w-0 group-hover:w-full h-0.5 bg-white ease-in-out duration-500"></div>
                            </span>
                            <span class="block font-light leading-5 opacity-50">TSfN resources include advocacy
                                tools, psychosocial support for caregivers, educational materials,

                                recreational activities, access to affordable therapies and assistive
                                devices.</span>
                        </a>

                    </div>
                    <div class="w-72">
                        <a href="#_" @click="navigationMenuClose()"
                            class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                            <span class="group">
                                <button
                                    class='block py-2 px-3 md:text-2xl text-lg  md:font-bold font-medium text-red-900 rounded hover:bg-pink-800 md:hover:bg-transparent  '
                                    href='' onclick="scrollToSection('section7')">Gallery</button>
                                <div class="w-0 group-hover:w-full h-0.5 bg-white ease-in-out duration-500"></div>
                            </span>
                            <span class="block font-light leading-5 opacity-50">A framework without the complex
                                setup or
                                heavy dependencies.</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

                    @if (auth()->user()->type == 'customer')
                        <a href="/start">
                            <p class="text-red-800 text-sm">Start</p>
                        </a>
                    @endif
                </div>
            @else
                <div class="hidden lg:flex gap-x-6">
                    @foreach ($pages->sortBy('order') as $page)
                        <a href="/{{ $page->slug }}">
                            <p class="text-red-800 text-sm">{{ $page->name }}</p>
                        </a>
                    @endforeach
                </div>
            @endauth
        </div>

        <div class="flex items-center gap-x-6">

            @auth
                @if (auth()->user()->type != 'admin')
                    {{-- Notifications --}}
                    <livewire:sections.popup-notifications />

                    {{-- Logout --}}
                    <button wire:click="logout">
                        <div>
                            <svg width="42" height="43" viewBox="0 0 42 43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.5" width="42" height="42" rx="21" fill="#037856" />
                                <path
                                    d="M17.6302 20.32C16.9441 20.32 16.3802 20.8839 16.3802 21.57C16.3802 22.2472 16.9267 22.8232 17.6354 22.81H22.6002V30.64C22.6002 30.8401 22.4379 31 22.2402 31C19.4146 31 17.0461 30.0162 15.385 28.3552C13.724 26.6942 12.7402 24.3256 12.7402 21.5C12.7402 18.6744 13.724 16.3058 15.385 14.6448C17.0461 12.9838 19.4146 12 22.2402 12C22.4409 12 22.6037 12.1544 22.6102 12.3662V20.32H17.6302Z"
                                    fill="white" stroke="white" />
                                <path
                                    d="M29.1854 21.393L29.1861 21.3936C29.2833 21.4908 29.2742 21.6344 29.1885 21.7145L29.1818 21.7207L29.1754 21.7271L26.3361 24.5765C26.336 24.5766 26.3359 24.5767 26.3358 24.5767C26.2846 24.6278 26.224 24.65 26.1596 24.65C26.0951 24.65 26.0345 24.6278 25.9832 24.5765C25.8884 24.4817 25.8884 24.3183 25.9832 24.2236L27.5432 22.6636L28.3967 21.81H27.1896H23.5996V21.31H27.1996H28.4067L27.5532 20.4565L25.9932 18.8965C25.8984 18.8017 25.8984 18.6383 25.9932 18.5436C26.0878 18.4489 26.2511 18.4488 26.3458 18.5434C26.3459 18.5434 26.346 18.5435 26.3461 18.5436L29.1854 21.393Z"
                                    fill="white" stroke="white" />
                            </svg>
                        </div>
                    </button>
                @endif
            @else
                {{-- Register Dealer Popup and Button Component --}}
                <div class="hidden lg:flex">
                    <livewire:pages.auth.popup-register-dealer />
                </div>

                {{-- Login Popup and Button Component --}}
                <div class="hidden lg:flex">
                    <livewire:pages.auth.login />
                </div>
            @endauth
            {{-- Hamburger menu --}}
            <livewire:sections.mobile-header-ham-menu />

        </div>
    </nav>
</header>
<!-- End of desktop header -->
