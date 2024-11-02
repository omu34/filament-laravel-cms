<footer class="mt-auto">
    <div class="bg-red-900">
        <!-- Start of footer socials section -->
        <div class="py-8  mx-auto max-w-7xl">
            <div
                class="grid justify-items-start grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-x-10 gap-y-10 lg:gap-y-0 px-8 mx-auto">
                @foreach ($socials as $social)
                    <a href="{{ $social->url }}">
                        <div class="flex justify-center items-center gap-x-2">
                            <img src="{{ asset($social->icon) }}" alt="{{ $social->title }}">
                            <span class="text-sm font-bold text-white">
                                {{ $social->title }}
                            </span>
                        </div>
                    </a>
                @endforeach

                {{-- <a href="https://www.instagram.com/coopbankenya/?hl=en">
                        <div class="flex justify-center items-center gap-x-2">
                            <img src="{{ asset('images/ig.svg') }}" alt="ig">
                            <span class="text-sm font-bold text-red-900">Instagram</span>
                        </div>
                    </a>

                    <a href="https://www.linkedin.com/company/62404/">
                        <div class="flex justify-center items-center gap-x-2">
                            <img src="{{ asset('images/ln.svg') }}" alt="ln">
                            <span class="text-sm font-bold text-brand-dark-green">LinkedIn</span>
                        </div>
                    </a>

                    <a href="https://www.youtube.com/co-opbankkenya">
                        <div class="flex justify-center items-center gap-x-2">
                            <img src="{{ asset('images/yt.svg') }}" alt="yt">
                            <span class="text-sm font-bold text-brand-dark-green">YouTube</span>
                        </div>
                    </a>

                    <a href="#">
                        <div class="flex justify-center items-center gap-x-2">
                            <img src="{{ asset('images/wa.svg') }}" alt="wa">
                            <span class="text-sm font-bold text-brand-dark-green">WhatsApp</span>
                        </div>
                    </a>

                    <a href="https://twitter.com/Coopbankenya">
                        <div class="flex justify-center items-center gap-x-2">
                            <img src="{{ asset('images/x.svg') }}" alt="x">
                            <span class="text-sm font-bold text-brand-dark-green">X</span>
                        </div>
                    </a>

                    <a href="https://www.tiktok.com/@coopbankenya">
                        <div class="flex justify-center items-center gap-x-2">
                            <img src="{{ asset('images/tk.svg') }}" alt="tk">
                            <span class="text-sm font-bold text-brand-dark-green">TikTok</span>
                        </div>
                    </a>

                    <a href="https://www.flickr.com/photos/147086508@N03">
                        <div class="flex justify-center items-center gap-x-2">
                            <img src="{{ asset('images/fk.svg') }}" alt="fk">
                            <span class="text-sm font-bold text-brand-dark-green">Flickr</span>
                        </div>
                    </a> --}}
            </div>
        </div>
        <!-- End of footer socials section -->

        {{-- Start of main footer --}}
        <div class="bg-slate-900 px-8 xl:px-0">
            <div
                class="flex flex-col lg:flex-row py-12 px-4 lg:px-6 gap-4 md:gap-8 lg:gap-16 mx-auto w-full lg:max-w-7xl">
                @if ($footer != null)
                    <div class="flex flex-col w-full lg:w-1/3 gap-y-6">
                        <a href="/">
                            {{-- <img src="{{ asset($footer->first()->logo) }}" alt="Asset finance logo"> --}}
                            <a href="/" >
                                <img width="314" height="20"
                                    src="https://www.masikakoross.com/wp-content/uploads/2022/02/cropped-rsz_mk_letterhead_1-removebg-preview.png"
                                    class="bg-gray-200 rounded-lg custom-logo   pl-1 pr-1 transition-transform duration-500 transform ease-in-out hover:scale-110"
                                    alt="https://www.masikakoross.com/wp-content/uploads/2022/02/cropped-rsz_mk_letterhead_1-removebg-preview.png">

                            </a>
                        </a>
                        <div class="text-white">
                            {!! $footer->first()->description !!}
                        </div>
                        <a href="tel:0794698693">
                            <div class="flex items-center justify-center sm:justify-start">
                                <p class="text-white mr-1">
                                    {{ $footer->first()->phone_title }}
                                </p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.7468 7.16673C11.4602 7.16673 11.2335 6.9334 11.2335 6.6534C11.2335 6.40673 10.9868 5.8934 10.5735 5.44673C10.1668 5.0134 9.72016 4.76007 9.34683 4.76007C9.06016 4.76007 8.8335 4.52673 8.8335 4.24673C8.8335 3.96673 9.06683 3.7334 9.34683 3.7334C10.0135 3.7334 10.7135 4.0934 11.3268 4.74007C11.9002 5.34673 12.2668 6.10007 12.2668 6.64673C12.2668 6.9334 12.0335 7.16673 11.7468 7.16673Z"
                                        fill="white" />
                                    <path
                                        d="M14.1532 7.16659C13.8665 7.16659 13.6398 6.93325 13.6398 6.65325C13.6398 4.28659 11.7132 2.36659 9.35318 2.36659C9.06651 2.36659 8.83984 2.13325 8.83984 1.85325C8.83984 1.57325 9.06651 1.33325 9.34651 1.33325C12.2798 1.33325 14.6665 3.71992 14.6665 6.65325C14.6665 6.93325 14.4332 7.16659 14.1532 7.16659Z"
                                        fill="white" />
                                    <path
                                        d="M7.36683 9.96659L6.1335 11.1999C5.8735 11.4599 5.46016 11.4599 5.1935 11.2066C5.12016 11.1333 5.04683 11.0666 4.9735 10.9933C4.28683 10.2999 3.66683 9.57325 3.1135 8.81325C2.56683 8.05325 2.12683 7.29325 1.80683 6.53992C1.4935 5.77992 1.3335 5.05325 1.3335 4.35992C1.3335 3.90659 1.4135 3.47325 1.5735 3.07325C1.7335 2.66659 1.98683 2.29325 2.34016 1.95992C2.76683 1.53992 3.2335 1.33325 3.72683 1.33325C3.9135 1.33325 4.10016 1.37325 4.26683 1.45325C4.44016 1.53325 4.5935 1.65325 4.7135 1.82659L6.26016 4.00659C6.38016 4.17325 6.46683 4.32659 6.52683 4.47325C6.58683 4.61325 6.62016 4.75325 6.62016 4.87992C6.62016 5.03992 6.5735 5.19992 6.48016 5.35325C6.3935 5.50659 6.26683 5.66659 6.10683 5.82659L5.60016 6.35325C5.52683 6.42659 5.4935 6.51325 5.4935 6.61992C5.4935 6.67325 5.50016 6.71992 5.5135 6.77325C5.5335 6.82659 5.5535 6.86659 5.56683 6.90659C5.68683 7.12659 5.8935 7.41325 6.18683 7.75992C6.48683 8.10659 6.80683 8.45992 7.1535 8.81325C7.22016 8.87992 7.2935 8.94659 7.36016 9.01325C7.62683 9.27325 7.6335 9.69992 7.36683 9.96659Z"
                                        fill="white" />
                                    <path
                                        d="M14.6466 12.2201C14.6466 12.4068 14.6132 12.6001 14.5466 12.7868C14.5266 12.8401 14.5066 12.8934 14.4799 12.9468C14.3666 13.1868 14.2199 13.4134 14.0266 13.6268C13.6999 13.9868 13.3399 14.2468 12.9332 14.4134C12.9266 14.4134 12.9199 14.4201 12.9132 14.4201C12.5199 14.5801 12.0932 14.6668 11.6332 14.6668C10.9532 14.6668 10.2266 14.5068 9.4599 14.1801C8.69324 13.8534 7.92657 13.4134 7.16657 12.8601C6.90657 12.6668 6.64657 12.4734 6.3999 12.2668L8.5799 10.0868C8.76657 10.2268 8.93324 10.3334 9.07324 10.4068C9.10657 10.4201 9.14657 10.4401 9.19324 10.4601C9.24657 10.4801 9.2999 10.4868 9.3599 10.4868C9.47324 10.4868 9.5599 10.4468 9.63324 10.3734L10.1399 9.87344C10.3066 9.70677 10.4666 9.58011 10.6199 9.50011C10.7732 9.40677 10.9266 9.36011 11.0932 9.36011C11.2199 9.36011 11.3532 9.38677 11.4999 9.44677C11.6466 9.50677 11.7999 9.59344 11.9666 9.70677L14.1732 11.2734C14.3466 11.3934 14.4666 11.5334 14.5399 11.7001C14.6066 11.8668 14.6466 12.0334 14.6466 12.2201Z"
                                        fill="white" />
                                </svg>
                                <p class="text-white ml-1">
                                    {{ $footer->first()->phone }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endif
                <div
                    class="w-full lg:w-2/3 flex lg:flex flex-col sm:grid sm:grid-cols-2 md:grid-cols-4 lg:flex-row gap-x-5 md:gap-x-10 lg:gap-x-20 gap-y-5 lg:gap-y-10 justify-end">
                    @foreach ($footerlinks as $footer)
                        <div class="flex flex-col text-center sm:text-left">
                            <p class="text-white text-lg mb-6">
                                {{ $footer->title }}
                            </p>
                            @foreach ($footer->children as $link)
                                <ul class="list-none ml-0">
                                    @if ($link->url != null)
                                        <a href="{{ $link->url }}">
                                            <li class="text-white mb-4">
                                                {{ $link->title }}
                                            </li>
                                        </a>
                                    @elseif($link->url)
                                        <li class="text-white mb-4">
                                            {{ $link->title }}
                                        </li>
                                    @endif
                                    {{-- <a href="/dealer-account">
                                        <li class="text-white mb-4">
                                            Dealer Account
                                        </li>
                                    </a>
                                    <a href="/agent-account">
                                        <li class="text-white mb-4">
                                            Agent Account
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="text-white mb-4">
                                            Lorem
                                        </li>
                                    </a> --}}
                                </ul>
                            @endforeach
                        </div>
                        {{-- <div class="flex flex-col text-center sm:text-left">
                            <p class="text-white text-xl mb-6">
                                Other Sites
                            </p>
                            <ul class="list-none ml-0">
                                <a href="#"><li class="text-white mb-4">Ipsum</li></a>
                                <a href="#"><li class="text-white mb-4">Ullamco</li></a>
                                <a href="#"><li class="text-white mb-4">Laborum</li></a>
                                <a href="#"><li class="text-white mb-4">Aliquip</li></a>
                            </ul>
                        </div>
                        <div class="flex flex-col text-center sm:text-left">
                            <p class="text-white text-xl mb-6">
                                Links
                            </p>
                            <ul class="list-none ml-0">
                                <a href="/terms"><li class="text-white mb-4">Terms & Conditions</li></a>
                                <a href="/faqs"><li class="text-white mb-4">FAQs</li></a>
                                <a href="/start-application"><li class="text-white mb-4">Application</li></a>
                                <a href="#"><li class="text-white mb-4">Aliquip</li></a>
                            </ul>
                        </div>
                        <div class="flex flex-col text-center sm:text-left">
                            <p class="text-white text-xl mb-6">
                                Contact
                            </p>
                            <ul class="list-none ml-0">
                                <a href="#"><li class="text-white mb-4">Ipsum</li></a>
                                <a href="#"><li class="text-white mb-4">Ullamco</li></a>
                                <a href="#"><li class="text-white mb-4">Laborum</li></a>
                                <a href="#"><li class="text-white mb-4">Aliquip</li></a>
                            </ul>
                        </div> --}}
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col pb-12 px-4 lg:px-6 mx-auto w-full lg:max-w-7xl">
                <hr class="border border-solid border-white w-full">
                <p class="text-white text-sm text-center pt-4">&copy; {{ date('Y') }} Masika & Koross Advocates.
                    All Rights Reserved. Masika & Koross Advocates is regulated by the Law Society of Kenya</p>
            </div>
        </div>
        {{-- End of main footer --}}

        {{-- Start of sticky privacy alert --}}
        <div class=" w-full fixed z-20 bottom-0" x-cloak x-data="{ open: localStorage.getItem('privacyAlertClosed') !== '1' }" :class="open ? 'flex' : 'hidden'">
            <div class="flex px-4 lg:px-6 py-6 lg:py-2 mx-auto w-full">
                <div
                    class="bg-red-700 rounded-lg flex flex-col sm:flex-row gap-y-4 sm:gap-y-0 justify-between w-full max-w-max sm:max-w-md md:max-w-xl lg:max-w-3xl xl:max-w-max">
                    <div class="flex justify-start items-center gap-x-3 lg:gap-x-6">
                        <svg class="w-14 sm:w-8" width="24" height="25" viewBox="0 0 24 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.9728 15.6865L18.974 15.6884C19.2956 16.2162 19.3522 16.8383 19.1389 17.4042C18.9232 17.9767 18.479 18.41 17.9062 18.5982L17.9038 18.599C16.0093 19.2337 14.0154 19.5468 12.0199 19.5468C10.0245 19.5468 8.03133 19.2337 6.13798 18.5896L6.13711 18.5893C5.5025 18.3749 5.04301 17.9401 4.85341 17.4108L4.85342 17.4108L4.85219 17.4075C4.65187 16.8626 4.71648 16.2575 5.05734 15.686C5.05753 15.6857 5.05773 15.6854 5.05792 15.685L6.06666 14.0171L6.06671 14.0172L6.07013 14.0113C6.20142 13.7862 6.3134 13.4815 6.39225 13.1915C6.47102 12.9018 6.52851 12.5834 6.52851 12.3253V9.79534C6.52851 7.64595 7.77918 5.78023 9.59082 4.87906L9.70938 4.82008L9.77401 4.7045C10.2193 3.90806 11.0574 3.40391 11.9899 3.40391C12.9362 3.40391 13.7532 3.8914 14.1968 4.67622L14.2633 4.79388L14.3853 4.8521C16.2327 5.73401 17.5114 7.61748 17.5114 9.79534V12.3253C17.5114 12.5834 17.5689 12.9018 17.6475 13.1923C17.7264 13.4838 17.8379 13.789 17.9672 14.0169L17.9671 14.017L17.9728 14.0265L18.9728 15.6865Z"
                                fill="#FAFAFA" stroke="#FAFAFA" stroke-width="0.857143" />
                            <path
                                d="M9.93194 21.5005C10.0378 21.5124 10.1454 21.5233 10.2534 21.5324C10.8333 21.5832 11.4256 21.6139 12.0199 21.6139C12.6048 21.6139 13.1877 21.5831 13.758 21.5322L13.758 21.5322L13.7606 21.532C13.8148 21.5268 13.8751 21.522 13.9386 21.5169C13.9804 21.5135 14.0235 21.5101 14.0673 21.5063C13.5957 22.1383 12.8437 22.5468 11.9999 22.5468C11.3223 22.5468 10.6549 22.2712 10.1883 21.7878L10.1809 21.78L10.173 21.7727C10.0861 21.6911 10.0054 21.5995 9.93194 21.5005Z"
                                fill="#FAFAFA" stroke="#FAFAFA" stroke-width="0.857143" />
                        </svg>
                        <div class="flex flex-col xl:flex-row gap-0 sm:gap-x-4 sm:gap-y-2">
                            <p class="text-white text-sm">
                                By using this website, you agree to our use of cookies in accordance with our Privacy
                                Policy.
                            </p>
                            <p class="text-white text-sm">
                                Click here to learn more
                            </p>
                            <a href="/terms"
                                class="w-32 px-4 py hidden sm:flex items-center justify-center rounded-lg bg-red-900 hover:opacity-75 text-white border-2 border-white">
                                <button type="button" class="text-sm">
                                    Learn More
                                </button>
                                <span class="pl-2 text-sm">></span>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center hover:opacity-80">
                        <a href="/terms"
                            class="px-4 py flex sm:hidden items-center justify-center rounded-lg bg-red-900 hover:opacity-75 text-white border-2 border-white">
                            <button type="button" class="text-sm">
                                Learn More
                            </button>
                            <span class="pl-2 text-sm">></span>
                        </a>
                        <div class="flex"
                            x-on:click="open = !open; if (!open) localStorage.setItem('privacyAlertClosed', '1')">
                            <svg class="ml-4" width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.42857 12.9753C2.42857 7.70203 6.72669 3.40391 12 3.40391C17.2733 3.40391 21.5714 7.70203 21.5714 12.9753C21.5714 18.2486 17.2733 22.5468 12 22.5468C6.72669 22.5468 2.42857 18.2486 2.42857 12.9753ZM15.663 16.6384C16.1204 16.181 16.1204 15.4297 15.663 14.9723L13.6661 12.9753L15.663 10.9784C16.1204 10.521 16.1204 9.76966 15.663 9.3123C15.2057 8.85493 14.4543 8.85493 13.997 9.3123L12 11.3092L10.003 9.3123C9.54568 8.85493 8.79432 8.85493 8.33695 9.3123C7.87959 9.76966 7.87959 10.521 8.33695 10.9784L10.3339 12.9753L8.33695 14.9723C7.87959 15.4297 7.87959 16.181 8.33695 16.6384C8.57156 16.873 8.87247 16.9839 9.17 16.9839C9.46753 16.9839 9.76844 16.873 10.003 16.6384L12 14.6414L13.997 16.6384C14.2316 16.873 14.5325 16.9839 14.83 16.9839C15.1275 16.9839 15.4284 16.873 15.663 16.6384Z"
                                    fill="#FAFAFA" stroke="#FAFAFA" stroke-width="0.857143" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of sticky privacy alert --}}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script>
        $(document).ready(function() {
            $('select').select2();
        });
    </script>
</footer>
