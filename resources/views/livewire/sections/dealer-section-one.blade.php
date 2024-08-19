<section data-aos="fade-up" data-aos-duration="1000">

    <div class="pt-28 pb-10 bg-white" data-aos="fade-up" data-aos-duration="1000">
        <div class="mx-auto max-w-6xl" x-cloak x-data="{                
            details: [
                { 
                    id: 1,
                    name: 'Automotors Ltd',
                    agents_icon: 'images/agents-icon.svg', 
                    customers_icon: 'images/customers-icon.svg', 
                    loans_icon: 'images/loans-icon.svg', 
                    agents: 5,
                    customers: 50,
                    loans: 70,
                },
            ],
            }">
            <div>
                <template x-for="(detail, index) in details" :key="index">
                    <div class="px-8 sm:px-4 xl:px-0">  
                        <div x-data="{ open: true }">
                            @if (!$dealer->is_approved)
                                <div x-show="open" class="bg-yellow-500 text-white p-4 rounded mb-8 relative">
                                    You are not yet approved as a dealer.
                                    <button @click="open = false" class="absolute top-0 right-0 p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="w-full pb-8 flex flex-col justify-center items-center gap-y-2">
                            <h2 class="text-brand-green" x-text="detail.name"></h2>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-5">
                            <div class="flex justify-start items-center border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-4 p-3 sm:p-6">
                                <div class="flex justify-start items-center">
                                    <img x-bind:src="'{{ asset('') }}' + detail.agents_icon" alt="details icon">
                                </div>
                                <div class="flex justify-start items-center">
                                    <h5 class="text-brand-green">
                                        Agents: <span x-text="detail.agents"></span>
                                    </h5>
                                </div>
                            </div>
                            <div class="flex justify-start items-center border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-4 p-3 sm:p-6">
                                <div class="flex justify-start items-center">
                                    <img x-bind:src="'{{ asset('') }}' + detail.customers_icon" alt="details icon">
                                </div>
                                <div class="flex justify-start items-center">
                                    <h5 class="text-brand-green">
                                        Customers: <span x-text="detail.customers"></span>
                                    </h5>
                                </div>
                            </div>
                            <div class="flex justify-start items-center border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-4 p-3 sm:p-6">
                                <div class="flex justify-start items-center">
                                    <img x-bind:src="'{{ asset('') }}' + detail.loans_icon" alt="details icon">
                                </div>
                                <div class="flex justify-start items-center">
                                    <h5 class="text-brand-green">
                                        Loans: <span x-text="detail.loans"></span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        {{-- @if ($isapproved=1) --}}
                            <div class="w-full flex flex-col sm:flex-row items-center justify-center mt-10 gap-6">

                                {{-- Create agent modal --}}
                                <livewire:sections.popup-create-agent/>

                                @if ($dealer->is_approved)
                                    <a href="/application" class="w-60 xl:w-fit px-4 py-2 flex items-center justify-center rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md">
                                        <button type="button" class="text-sm" {{ $dealer->is_approved ? '' : 'disabled' }}>
                                            Create Customer Account
                                        </button>
                                        <svg class="pl-2" width="25" height="25" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                                            <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                                        </svg>
                                    </a>
                                @endif   
                                
                                @if (!$dealer->is_approved)
                                    <a href="/application" class="w-60 xl:w-fit px-4 py-2 flex items-center justify-center rounded-lg bg-gray-400 text-white border-2 shadow-md">
                                        <button type="button" class="text-sm">
                                            Create Customer Account
                                        </button>
                                        <svg class="pl-2" width="25" height="25" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                                            <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                                        </svg>
                                    </a>
                                @endif 

                            </div>
                        {{-- @endif --}}
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>
