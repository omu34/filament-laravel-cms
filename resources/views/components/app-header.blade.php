<!-- Start of header -->
<header class="bg-gray-300 fixed z-50 inset-x-0">
    <nav class="mx-auto flex lg:max-w-7xl items-center justify-between p-4 lg:px-6">
        <div class="flex items-center gap-x-6">
            <a href="/">
                {{-- <img src="{{ asset('images/coop-logo.png') }}" alt="Asset finance logo" class="w-3/4 md:w-full"> --}}
                <img width="314" height="20"
                                    src="https://www.masikakoross.com/wp-content/uploads/2022/02/cropped-rsz_mk_letterhead_1-removebg-preview.png"
                                    class="bg-gray-200 rounded-lg custom-logo   pl-1 pr-1 transition-transform duration-500 transform ease-in-out hover:scale-110"
                                    alt="https://www.masikakoross.com/wp-content/uploads/2022/02/cropped-rsz_mk_letterhead_1-removebg-preview.png">

            </a>
            <div class="hidden lg:flex gap-x-6">
                @foreach($pages->sortBy('order') as $page)
                    <a href="/{{$page->slug}}">
                        <p class="text-red-800 text-sm">{{$page->name}}</p>
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
