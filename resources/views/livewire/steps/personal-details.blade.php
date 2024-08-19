<form wire:submit.prevent="sendOtp"> 
    <div x-show="step === 1" class="w-full flex flex-col gap-y-6 px-8 sm:px-4 xl:px-0">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg wire:click="closeAlert" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.95 5.05a.75.75 0 0 1 1.06 1.06L11.06 10l4.95 4.95a.75.75 0 1 1-1.06 1.06L10 11.06l-4.95 4.95a.75.75 0 0 1-1.06-1.06L8.94 10 4.99 5.05a.75.75 0 0 1 1.06-1.06L10 8.94l4.95-4.95z"></path>
                        </svg>
                    </span>
                </div>
            @endif
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6">
                <div class="grid grid-cols-1 gap-2">
                    <label for="fname">First Name <span class="text-required-red">*</span></label>
                    <input type="text" name="fname" id="fname" wire:model="firstName">
                    @error('firstName')
                        <span class="text-required-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <label for="lname">Last Name <span class="text-required-red">*</span></label>
                    <input type="text" name="lname" id="lname" wire:model="lastName">
                    @error('lastName')
                        <span class="text-required-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <label for="email">Email Address <span class="text-required-red">*</span></label>
                    <input type="email" name="email" id="email" wire:model="email">
                    @error('email')
                        <span class="text-required-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <label for="phone">Phone Number <span class="text-required-red">*</span></label>
                    <input type="tel" name="phone" id="phone" wire:model="phone">
                    @error('phone')
                        <span class="text-required-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <label for="password">Password <span class="text-required-red">*</span></label>
                    <input type="password" name="password" id="password" wire:model="password">
                    @error('password')
                        <span class="text-required-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <label for="confirm_password">
                        Repeat Password 
                        <span class="text-required-red">*</span>
                    </label>
                    <input type="password" name="confirm_password" id="confirm_password" wire:model="confirmPassword">
                    @error('confirmPassword')
                        <span class="text-required-red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col sm:flex-row sm:flex gap-2 w-full sm:w-2/3">
                <div class="w-full mr-0 sm:mr-8">
                    <label class="flex w-max">Select preferred verification method:<span class="text-required-red">*</span></label>
                </div>
                <div class="flex w-full gap-x-8">
                    <div class="w-1/4 sm:w-1/6 flex items-center gap-2">
                        <input id="v_sms" class="peer/v_sms" type="radio" name="verification_method" wire:model="verificationMethod" value="sms" />
                        <label for="v_sms" class="peer-checked/v_sms:text-brand-green">SMS</label>
                    </div>
                    <div class="w-1/4 sm:w-1/6 flex items-center gap-2">
                        <input id="v_email" class="peer/v_email" type="radio" name="verification_method" wire:model="verificationMethod" value="email" />
                        <label for="v_email" class="peer-checked/v_email:text-brand-green">Email</label>
                    </div>
                </div>
            </div>
        <div class="flex flex-col sm:flex-row gap-y-2 sm:gap-y-0 w-full">
            <div class="w-full sm:w-1/4 md:w-1/5 mr-4 flex items-end justify-start">
                <button type="submit" wire:click.prevent="sendOtp" wire:loading.class="opacity-50 cursor-not-allowed" class="flex items-center justify-center px-4 py-2 text-sm rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md">
                    <span wire:loading.remove>Send OTP code</span>
                    <span wire:loading>Sending...</span>
                    <svg class="pl-2" width="30" height="30" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                        <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                    </svg>
                </button>
            </div>
            <div class="w-full sm:w-3/4 md:w-4/5 flex flex-col gap-2">
                <label for="verification">Enter verification code <span class="text-required-red">*</span></label>
                <input type="text" name="verification_code" id="verification" wire:model="otp">
                @error('otp')
                <span class="text-required-red">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-col sm:flex-row sm:flex gap-2 w-full">
            <a href="#" class="flex w-full sm:w-1/3">
                <label class="flex w-max">Haven't received the code?</label>
            </a>
            <div class="flex w-full sm:w-1/2 gap-x-8" x-data="otpSend(120)" @otp-sent.window="startCounter()">
                <template x-if="time > 0">
                    <div class="w-full sm:w-1/3 flex items-center gap-2">
                        <span class="text-brand-light-green" x-text="formatTime(time)"></span>
                    </div>
                </template>
                <template x-if="time <= 0">
                    <a href="#" class="w-full sm:w-1/2 flex items-center gap-2" wire:click="resendOtp">
                        <label>Resend OTP code</label>
                        <img class="ml-2" src="{{ asset('images/details-icon.svg') }}" alt="Details icon"/>
                    </a>
                </template>
            </div>
        </div>
            <div class="flex w-full">
                <input type="checkbox" class="w-4 h-4 mr-2 mt-1 rounded-md checked:bg-brand-green" id="terms_privacy" name="terms_privacy" wire:model="termsPrivacy" value="">
                <div class="flex flex-col">
                    <label for="terms_privacy" class="text-gray-500">
                        I have read and agreed with the 
                        <a href="/terms" class="text-brand-green hover:text-gray-500 hover:opacity-100 underline underline-offset-2">terms and conditions</a> 
                        and 
                        <a href="#" class="text-brand-green hover:text-gray-500 hover:opacity-100 underline underline-offset-2">privacy policy</a>.
                        <span class="text-required-red">*</span>
                    </label>
                    @error('termsPrivacy')
                        <span class="text-required-red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        <div class="flex justify-center">
            <button type="button" wire:click="validateOtpAndTerms" class="w-52 flex items-center justify-center px-4 py-2 text-sm rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md text-center">
                Next
                <svg class="pl-2" width="30" height="30" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                    <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                </svg>
            </button>
        </div>
    </div>
</form>

<script>
    function otpSend(initialTime) {
        return {
            time: initialTime,
            interval: null,
            init() {
                this.reset();
            },
            reset() {
                this.time = initialTime;
            },
            startCounter() {
                this.reset();
                if (this.interval) {
                    clearInterval(this.interval);
                }
                this.interval = setInterval(() => {
                    if (this.time > 0) {
                        this.time--;
                    } else {
                        clearInterval(this.interval);
                    }
                }, 1000);
            },
            formatTime(seconds) {
                const minutes = Math.floor(seconds / 60);
                const remainingSeconds = seconds % 60;
                return `${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
            }
        };
    }
</script>
