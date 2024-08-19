<div x-data="{ mobileHamMenuOpen: false }">
    <div x-data="{}" x-ref="search" x-show="mobileHamMenuOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex min-h-full items-start justify-end text-center">
            <div x-cloak @click="mobileHamMenuOpen = false" x-show="mobileHamMenuOpen" 
            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
            </div>

            <div class="w-full h-full fixed bg-white pt-6 pb-4 flex flex-col" x-data="{}" x-cloak x-show="mobileHamMenuOpen"
            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full">
                <div class="flex flex-col">
                    <div class="flex w-full">
                        <div class="flex flex-col w-full gap-6">
                            <div class="flex items-center justify-end px-4">
                                <button type="button" @click="mobileHamMenuOpen = false" class="hover:opacity-80">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.55558 15.9998C3.55558 9.14409 9.14427 3.55539 16 3.55539C22.8558 3.55539 28.4445 9.14409 28.4445 15.9998C28.4445 22.8556 22.8558 28.4443 16 28.4443C9.14427 28.4443 3.55558 22.8556 3.55558 15.9998ZM19.7734 21.6621C20.2497 21.6621 20.7331 21.4839 21.1086 21.1084C21.8424 20.3746 21.8424 19.1718 21.1086 18.438L18.6704 15.9998L21.1086 13.5617C21.8424 12.8279 21.8424 11.6251 21.1086 10.8913C20.3748 10.1575 19.1719 10.1575 18.4381 10.8913L16 13.3294L13.5619 10.8913C12.8281 10.1575 11.6253 10.1575 10.8915 10.8913C10.1577 11.6251 10.1577 12.8279 10.8915 13.5617L13.3296 15.9998L10.8915 18.438C10.1577 19.1718 10.1577 20.3746 10.8915 21.1084C11.267 21.4839 11.7503 21.6621 12.2267 21.6621C12.703 21.6621 13.1864 21.4839 13.5619 21.1084L16 18.6702L18.4381 21.1084C18.8136 21.4839 19.297 21.6621 19.7734 21.6621Z" fill="#CA4B3D" stroke="#CA4B3D" stroke-width="1.77778"/>
                                    </svg>                                
                                </button>
                            </div>
                            <div class="flex flex-col items-center justify-start px-8 gap-8 cursor-default">
                                <a href="/"><h5 class="text-brand-dark-green text-bold">Home</h5></a>
                                <a href="/start-application"><h5 class="text-brand-dark-green text-bold">Start Application</h5></a>
                                <a href="/faqs"><h5 class="text-brand-dark-green text-bold">FAQs</h5></a>
                                <a href="/terms"><h5 class="text-brand-dark-green text-bold">Terms & Conditions</h5></a>
                                <livewire:pages.auth.popup-register-dealer/>
                                <livewire:sections.popup-login/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Hamburger menu --}}
    <div class="lg:hidden" x-on:click="mobileHamMenuOpen = !mobileHamMenuOpen">
        <button class="text-brand-dark-green">
            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="42" height="42" rx="21" fill="#037856"/>
                <path d="M12 16H30H12Z" fill="white"/>
                <path d="M12 16H30" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M12 21H30H12Z" fill="white"/>
                <path d="M12 21H30" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M12 26H30" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
            </svg>                
        </button>
    </div>

</div>