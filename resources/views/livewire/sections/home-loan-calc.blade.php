<section class="px-8 sm:px-4 xl:px-0 py-8 bg-white mx-auto max-w-6xl" data-aos="fade-up" data-aos-duration="1000">
    <div class="w-full flex flex-col sm:flex-row justify-start items-start border-solid border-2 border-brand-green bg-brand-tlg-ten rounded-lg gap-4 p-10">
        <div class="w-full sm:w-2/3 grid gap-4">
            @if ($sectiondata != null)
                <h4 class="text-brand-green">
                    {{$sectiondata->title}}
                </h4>
                <div class="text-basic-black">
                    {!!$sectiondata->description!!}
                </div>
            @endif
            <form action="" class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6">
                <div class="grid grid-cols-1 gap-2">
                    <label for="fname">
                        Loan amount 
                        <span class="text-required-red">*</span>
                    </label>
                    <input type="number" name="amount" id="amount" placeholder="KSH.">
                </div>
                <div class="grid grid-cols-1 gap-2 custom-select">
                    <label for="lterm">Loan term in years <span class="text-required-red">*</span></label>
                    <select name="lterm" autocomplete="lterm">
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
        <div class="w-full sm:w-1/3 grid grid-cols-1 gap-4">
            <div class="grid grid-cols-1 gap-1 text-center">
                <p class="text-sm font-bold lg:text-base">Amount Requested</p>
                <h5 class="text-brand-dark-green">KES. 1,500,200</h5>
            </div>
            <div class="grid grid-cols-1 gap-1 text-center">
                <p class="text-sm font-bold lg:text-base">Estimated Monthly Repayment</p>
                <h5 class="text-brand-dark-green">KES. 45,235</h5>
            </div>
            <div class="grid grid-cols-1 gap-1 text-center">
                <p class="text-sm font-bold lg:text-base">Total Interest Paid (21% rate)</p>
                <h5 class="text-brand-dark-green">KES. 754,238</h5>
            </div>
            <div class="grid grid-cols-1 gap-1 text-center">
                <p class="text-sm font-bold lg:text-base">Loan Duration</p>
                <h5 class="text-brand-dark-green">4 years</h5>
            </div>
            <div class="w-full flex items-center justify-center">
                <div class="w-48 min-w-fit sm:w-1/2 px-4 py-2 flex items-center justify-center rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md">
                    <a href="/start-application" class="text-sm hover:opacity-100">
                        Start Application
                    </a>
                    <svg class="pl-2" width="25" height="25" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                        <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
