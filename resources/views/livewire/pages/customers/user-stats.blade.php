<section data-aos="fade-up" data-aos-duration="1000">

    <div class="pt-28 pb-10 bg-white" data-aos="fade-up" data-aos-duration="1000">
        <div class="mx-auto max-w-6xl" x-cloak x-data="{
            details: @entangle('details')
        }">
            <div>
                <template x-for="(detail, index) in details" :key="index">
                    <div class="px-8 sm:px-4 xl:px-0">  
                        <div class="w-full pb-8 flex flex-col justify-center items-center gap-y-2">
                            <h2 class="text-brand-green" x-text="detail.name"></h2>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-5">
                            <div class="flex justify-start items-center border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-4 p-3 sm:p-6">
                                <div class="flex justify-start items-center">
                                    <img x-bind:src="'{{ asset('') }}' + detail.phone_icon" alt="details icon">
                                </div>
                                <div class="flex justify-start items-center">
                                    <h5 class="text-brand-green" x-text="detail.phone_no"></h5>
                                </div>
                            </div>
                            <div class="flex justify-start items-center border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-4 p-3 sm:p-6">
                                <div class="flex justify-start items-center">
                                    <img x-bind:src="'{{ asset('') }}' + detail.email_icon" alt="details icon">
                                </div>
                                <div class="flex justify-start items-center">
                                    <h5 class="text-brand-green text-sm" x-text="detail.email"></h5>
                                </div>
                            </div>
                            <div class="flex justify-start items-center border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-4 p-3 sm:p-6">
                                <div class="flex justify-start items-center">
                                    <img x-bind:src="'{{ asset('') }}' + detail.applications_icon" alt="details icon">
                                </div>
                                <div class="flex justify-start items-center">
                                    <h5 class="text-brand-green">
                                        Applications: 
                                        <span x-text="detail.applications"></span>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        {{-- Popup for creating new loan --}}
                        {{-- <livewire:sections.popup-new-loan/> --}}

                    </div>
                </template>
            </div>
        </div>
    </div>
</section>
