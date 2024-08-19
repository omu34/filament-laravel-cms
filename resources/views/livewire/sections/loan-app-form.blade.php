<section class="pb-12 bg-white" data-aos="fade-up" data-aos-duration="1000">
    <div class="mx-auto w-full" x-data="{ step: {{ auth()->check() ? 2 : 1 }} }" @next-step.window="step++">
        <div class="w-full tabs flex justify-center gap-x-4 cursor-default">
            <div class="tab app-form-tab flex justify-center items-center" :class="{ 'active': step === 1 }">
                <div class="parent-div flex justify-center items-center border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-3 sm:gap-6 p-3 sm:p-6">
                    <div class="first-flex flex justify-center items-center bg-brand-tlg-twenty rounded-full py-0.5 sm:py-3 px-3 sm:px-6">
                        <h3 class="text-xl sm:text-3xl font-normal text-brand-dark-green">1</h3>
                    </div>
                    <div class="hidden lg:flex justify-start items-start mt-2">
                        <p class="text-brand-dark-green font-medium">{{$sectiondata->first_step_title}}</p>
                    </div>
                </div>
            </div>
            <div class="tab app-form-tab flex justify-center items-center" :class="{ 'active': step === 2 }">
                <div class="parent-div flex justify-center items-center border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-3 sm:gap-6 p-3 sm:p-6">
                    <div class="first-flex flex justify-center items-center bg-brand-tlg-twenty rounded-full py sm:py-3 px-2 sm:px-6">
                        <h3 class="text-xl sm:text-3xl font-normal text-brand-dark-green">2</h3>
                    </div>
                    <div class="hidden lg:flex justify-start items-start mt-2">
                        <p class="text-brand-dark-green font-medium">{{$sectiondata->second_step_title}}</p>
                    </div>
                </div>
            </div>
            <div class="tab app-form-tab flex justify-center items-center" :class="{ 'active': step === 3 }">
                <div class="parent-div flex justify-center items-center border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-3 sm:gap-6 p-3 sm:p-6">
                    <div class="first-flex flex justify-center items-center bg-brand-tlg-twenty rounded-full py sm:py-3 px-2 sm:px-6">
                        <h3 class="text-xl sm:text-3xl font-normal text-brand-dark-green">3</h3>
                    </div>
                    <div class="hidden lg:flex justify-start items-start mt-2">
                        <p class="text-brand-dark-green font-medium">{{$sectiondata->third_step_title}}</p>
                    </div>
                </div>
            </div>
            <div class="tab app-form-tab flex justify-center items-center" :class="{ 'active': step === 4 }">
                <div class="parent-div tab-four flex justify-center items-center border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-3 sm:gap-6 p-3 sm:p-6">
                    <div class="first-flex flex justify-center items-center bg-brand-tlg-twenty rounded-full py sm:py-3 px-2 sm:px-6">
                        <h3 class="text-xl sm:text-3xl font-normal text-brand-dark-green">4</h3>
                    </div>
                    <div class="hidden lg:flex justify-start items-start mt-2">
                        <p class="text-brand-dark-green font-medium">{{$sectiondata->fourth_step_title}}</p>
                    </div>
                </div>
            </div>
        </div>
    

        <div class="pt-8 sm:pt-12 pb-2 bg-white mx-auto max-w-4xl">
            <div class="grid gap-8 mx-auto" data-aos="fade-up" data-aos-duration="1000">
                <div class="w-full grid gap-y-6">
                    <livewire:steps.personal-details/>
                    <livewire:steps.account-details/>
                    <livewire:steps.document-upload/>
                    <livewire:steps.confirmation/>  
                </div>
            </div>    
        </div>
    </div>
</section>
