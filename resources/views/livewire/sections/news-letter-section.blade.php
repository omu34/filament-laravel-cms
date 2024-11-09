<div data-aos="fade-up" data-aos-duration="1000"  class="mt-1">
    <div class="relative bg-gray-200 pt-4">
        @if (session()->has('success'))
            <div class="alert alert-success text-emerald-700 flex justify-center">
                {{ session('success') }}
            </div>
        @elseif (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="absolute inset-x-0 bottom-0">
            <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                <path
                    d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
                </path>
            </svg>
        </div>
        @if ($sectiondata != null)
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-4">
                <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-3xl sm:text-center md:text-left">
                    <h2
                        class="mb-4 font-sans text-xl  text-center font-bold text-red-900 sm:text-3xl  tracking-tight sm:leading-none">
                        {{ $sectiondata->title }}
                    </h2>
                    <h3
                        class="max-w-xl text-left justify-between mb-5 text-xs tracking-wide md:text-md text-gray-700 sm:text-sm sm:mx-auto md:mb-5">
                        {!! $sectiondata->description !!}
                    </h3>
                    <form wire:submit.prevent="submitEmail" method="POST"
                        class="flex flex-col items-center mx-auto mb-4 gap-4 md:flex-row md:px-16">
                        <input type="email" wire:model="email" class="form-control" id="email" required
                            class="flex-grow w-full h-12 px-4 mb-3 text-text-gray-700 transition duration-200 border-2 border-transparent rounded appearance-none md:mr-2 md:mb-0 bg-deep-purple-900 focus:border-teal-accent-700 focus:outline-none focus:shadow-outline" />

                        <button type="submit" id="change-button"
                            class="inline-flex text-md text-red-900 items-center justify-center w-full  h-12 px-10 font-semibold tracking-wide  transition duration-200 rounded shadow-md md:w-auto hover:text-deep-purple-900 bg-teal-accent-400 hover:bg-teal-accent-700 focus:shadow-outline focus:outline-none">
                           Subscribe
                        </button>
                    </form>
                         @error('email')
                            <span class="text-red-500 flex justify-center">{{ $message }}</span>
                        @enderror
                    <p class="max-w-md mb-5 text-center text-xs tracking-wide text-red-900 sm:text-sm sm:mx-auto md:mb-7">
                        {{ $sectiondata->bottom }}
                    </p>
                    <a href="/" aria-label="Scroll down"
                        class="flex items-center justify-center w-10 h-10 mx-auto text-gray-700 duration-300 transform border border-gray-800 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110">
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
</div>
