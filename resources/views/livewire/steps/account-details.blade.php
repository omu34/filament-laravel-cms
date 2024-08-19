<form wire:submit.prevent="updateAccountDetails">
    <div x-show="step === 2" class="w-full flex flex-col gap-y-6 mb-4 px-8 sm:px-4 xl:px-0">
        <div x-data="{ idMethod: 'nid' }" class="grid gap-y-6">
            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-2/3">
                <div class="w-full sm:w-3/4 mr-0 sm:mr-8">
                    <label>Select identification method:<span class="text-required-red">*</span></label>
                </div>
                <div class="flex w-full gap-x-4">
                    <div class="w-1/3 sm:w-1/2 flex items-center gap-2">
                        <input id="nid" class="peer/nid" type="radio" name="id_pass" value="nid" x-model="idMethod" checked wire:model="idMethod" />
                        <label for="nid" class="peer-checked/nid:text-brand-green">National ID</label>
                    </div>
                    <div class="w-1/3 sm:w-1/2 flex items-center gap-2">
                        <input id="passport" class="peer/passport" type="radio" name="id_pass" value="passport" x-model="idMethod" wire:model="idMethod" />
                        <label for="passport" class="peer-checked/passport:text-brand-green">Passport</label>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full gap-2" x-show="idMethod === 'nid'">
                <label for="id_no">ID Number
                    <span class="text-required-red">*</span>
                </label>
                <input type="number" wire:model="idNumber" name="id_no" id="id_no">
                @error('idNumber')
                    <span class="text-required-red">{{ $message }}</span>
                @enderror
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6" x-show="idMethod === 'passport'">
                <div class="flex flex-col w-full gap-2">
                    <label for="pass_no">Passport Number
                        <span class="text-required-red">*</span>
                    </label>
                    <input type="text" wire:model="passportNumber" name="pass_no" id="pass_no">
                    @error('passportNumber')
                        <span class="text-required-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col w-full gap-2">
                    <label for="pass_exp_date" class="w-full">
                        Passport Expiry Date 
                        <span class="text-required-red">*</span>
                    </label>
                    <input type="date" wire:model="passportExpiry" id="pass_exp_date" name="pass_exp_date" class="w-full">
                    @error('passportExpiry')
                        <span class="text-required-red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="grid gap-x-10 gap-y-6">
            <div x-data="{ customerType: 'new' }" class="flex flex-col gap-4 w-full">
                <div class="flex w-full sm:w-3/4">
                    <label class="w-full">
                        Are you an existing or new customer? 
                        <span class="text-required-red">*</span>
                    </label>
                    <div class="flex w-full gap-x-4">
                        <div class="w-1/3 flex items-center gap-2">
                            <input type="radio" id="new" name="customerType" value="new" x-model="customerType" checked wire:model="customerType" />
                            <label for="new">New</label>
                        </div>
                        <div class="w-1/3 flex items-center gap-2">
                            <input type="radio" id="existing" name="customerType" value="existing" x-model="customerType" wire:model="customerType" >
                            <label for="existing">Existing</label>
                        </div>
                        @error('customerType')
                        <span class="text-required-red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col w-full gap-2 custom-select" x-show="customerType === 'existing'">
                    <label for="branch">
                        Select preferred branch 
                        <span class="text-required-red">*</span>
                    </label>
                    <div x-data="{ selected: @entangle('branch') }" x-init="() => {
                        const select = $('#branchone').select2();
                        select.on('change', () => { selected = select.val(); });
                    }" class="w-full flex flex-col">
                        <select id="branchone" x-model="selected" name="branch" wire:model="branch" autocomplete="branch">
                            <option value="" disabled selected style="color: #A0AEC0;">Select branch</option>
                            @foreach ($branches as $branch)
                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                            @endforeach
                        </select>
                        @error('branch')
                        <span class="text-required-red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="kra_pin">KRA PIN
                <span class="text-required-red">*</span>
            </label>
            <input type="text" name="kra_pin" id="kra_pin" wire:model="kraPin">
            @error('kraPin')
                <span class="text-required-red">{{ $message }}</span>
            @enderror
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6">
            <div class="flex flex-col w-full gap-2">
                <label for="amt">Amount to be financed
                    <span class="text-required-red">*</span>
                </label>
                <input type="number" name="amt" id="amt" wire:model="amount">
                @error('amount')
                    <span class="text-required-red">{{ $message }}</span>
                @enderror
            </div>
            <div class="grid grid-cols-1 gap-2 custom-select">
                <label for="dealer">Select dealer</label>
                <div x-data="{ selected: @entangle('dealer') }" x-init="() => {
                    const select = $('#dealerone').select2();
                    select.on('change', () => { selected = select.val(); });
                }" class="w-full flex flex-col">
                    <select id="dealerone" name="dealer" x-model="selected">
                        <option value="" disabled selected style="color: #A0AEC0;">Select dealer</option>
                        @foreach ($dealers as $dealer)
                            <option value="{{$dealer->id}}">{{$dealer->company_name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('dealer')
                    <span class="text-required-red">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-col gap-8 justify-center mt-5">
            <div class="flex flex-col justify-center sm:flex-row gap-4">
                {{-- <button type="button" @click="step--" class="w-52 flex items-center justify-center px-4 py-2 text-sm rounded-lg bg-white border-brand-green hover:border-brand-light-green hover:bg-brand-light-green text-brand-dark-green border-2 shadow-md text-center">
                    <svg class="pr-2" width="30" height="29" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M16.625 9C16.625 12.935 13.435 16.125 9.5 16.125C5.56497 16.125 2.375 12.935 2.375 9C2.375 5.06497 5.56497 1.875 9.5 1.875C13.435 1.875 16.625 5.06497 16.625 9Z" fill="#054E3B" stroke="#054E3B" stroke-width="0.75"/>
                        <path d="M10.445 12.2101C10.3025 12.2101 10.16 12.1576 10.0475 12.0451L7.4 9.39762C7.1825 9.18012 7.1825 8.82012 7.4 8.60262L10.0475 5.95512C10.265 5.73762 10.625 5.73762 10.8425 5.95512C11.06 6.17262 11.06 6.53262 10.8425 6.75012L8.5925 9.00012L10.8425 11.2501C11.06 11.4676 11.06 11.8276 10.8425 12.0451C10.7375 12.1576 10.595 12.2101 10.445 12.2101Z" fill="white"/>
                    </svg>                              
                    Previous                      
                </button> --}}
                <button type="submit" wire:loading.class="opacity-50 cursor-not-allowed" class="w-52 flex items-center justify-center px-4 py-2 text-sm rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md text-center">
                    Next
                    <svg class="pl-2" width="30" height="30" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                        <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                    </svg>
                </button>
            </div>
            {{-- <div class="w-full flex justify-center">
                <button type="submit" class="w-72 flex items-center justify-center px-4 py-2 text-sm rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md text-center">
                    Save & Continue Later
                    <svg class="pl-2" width="30" height="30" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                        <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                    </svg>
                </button>
            </div> --}}
        </div>
    </div>
</form>