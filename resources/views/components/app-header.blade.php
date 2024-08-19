<!-- Start of header -->
<header class="bg-brand-light-green fixed z-20 inset-x-0">
    <nav class="mx-auto flex lg:max-w-7xl items-center justify-between p-4 lg:px-6">
        <div class="flex items-center gap-x-6">
            <a href="/">
                <img src="{{ asset('images/coop-logo.png') }}" alt="Asset finance logo" class="w-3/4 md:w-full">
            </a>
            <div class="hidden lg:flex gap-x-6">
                @foreach($pages->sortBy('order') as $page)
                    <a href="/{{$page->slug}}">
                        <p class="text-brand-dark-green text-sm">{{$page->name}}</p>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="flex items-center gap-x-6">
            
            {{-- Register Dealer Popup and Button Component --}}
            <div class="hidden lg:flex">
                <livewire:pages.auth.popup-register-dealer/>
            </div>

            {{-- Login Popup and Button Component --}}
            <div class="hidden lg:flex">
                <livewire:sections.popup-login/>
            </div>
                
            {{-- Hamburger menu --}}
            <livewire:sections.mobile-header-ham-menu/>
            
        </div>
    </nav>
</header>
<!-- End of desktop header -->
