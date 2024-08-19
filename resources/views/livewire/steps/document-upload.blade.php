<form wire:submit.prevent="uploadDocuments" enctype="multipart/form-data">
    <div x-show="step === 3" x-data="{ incomeSource: 'salary' }" class="w-full grid gap-y-6 mb-4 px-8 sm:px-4 xl:px-0">
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
        <div class="flex">
            <p class="text-brand-green">* Please upload PDF files below</p>
        </div>
        <div class="w-full sm:w-2/3 flex flex-col sm:flex-row items-start sm:items-center gap-4">
            <div class="w-full sm:w-3/4">
                <label>Select source of income:<span class="text-required-red">*</span></label>
            </div>
            <div class="flex w-full gap-x-8">
                <div class="flex items-center gap-2">
                    <input id="salary" class="peer/salary" type="radio" name="income_source" value="salary" x-model="incomeSource" checked wire:model="incomeSource" />
                    <label for="salary" class="peer-checked/salary:text-brand-green">Salary</label>
                </div>
                <div class="flex items-center gap-2">
                    <input id="business" class="peer/business" type="radio" name="income_source" value="business" x-model="incomeSource" wire:model="incomeSource"/>
                    <label for="business" class="peer-checked/business:text-brand-green">Business</label>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-y-6" x-show="incomeSource === 'salary'" x-data='{
            salaryAttachments: <?php echo json_encode($salaryDocs->map(function($doc) {
                return [
                    "id" => $doc->id,
                    "elementDetail" => \Illuminate\Support\Str::snake($doc->name),
                    "labelFor" => \Illuminate\Support\Str::slug($doc->name, "_"),
                    "labelText" => $doc->name,
                ];
            })->toArray());?>
        }'>
            <template x-for="(salaryAttachment, index) in salaryAttachments" :key="index">
                <div class="w-full flex items-center gap-x-10 gap-y-6" x-data="{ fileName: salaryAttachment.labelText }">
                    <div class="w-2/3 flex gap-2 custom-select">
                        <label x-bind:for="salaryAttachment.labelFor">
                            <span x-text="fileName"></span>
                            <span class="text-required-red">*</span>
                        </label>
                    </div>    
                    <div class="w-1/3 flex gap-2">
                        <label :class="{'bg-red-800 hover:bg-required-red': fileName !== salaryAttachment.labelText, 'bg-brand-green hover:bg-brand-light-green': fileName === salaryAttachment.labelText}" class="flex items-center justify-center px-6 py-3 text-sm rounded-lg text-white border-2 shadow-md">
                            <span x-show="fileName === salaryAttachment.labelText">Attach</span>
                            <svg x-show="fileName === salaryAttachment.labelText" class="pl-2" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M13.7075 8.1425H15.875C16.0114 8.1425 16.125 8.25614 16.125 8.3925V12.3225C16.125 13.5386 15.7045 14.4457 15.0602 15.0509C14.4109 15.6606 13.4954 16 12.4475 16H6.5525C5.50461 16 4.58905 15.6606 3.9398 15.0509C3.2955 14.4457 2.875 13.5386 2.875 12.3225V5.6775C2.875 4.46141 3.2955 3.55428 3.9398 2.94915C4.58905 2.33936 5.50461 2 6.5525 2H9.7325C9.86886 2 9.9825 2.11364 9.9825 2.25V4.4175C9.9825 6.47114 11.6539 8.1425 13.7075 8.1425Z" fill="white" stroke="white"/>
                                <path d="M12.35 1.65786C12.0425 1.35036 11.51 1.56036 11.51 1.98786V4.60536C11.51 5.70036 12.44 6.60786 13.5725 6.60786C14.285 6.61536 15.275 6.61536 16.1225 6.61536C16.55 6.61536 16.775 6.11286 16.475 5.81286C15.395 4.72536 13.46 2.76786 12.35 1.65786Z" fill="white"/>
                                <path d="M9.1475 9.3525L7.6475 7.8525C7.64 7.845 7.6325 7.845 7.6325 7.8375C7.5875 7.7925 7.5275 7.755 7.4675 7.725C7.46 7.725 7.46 7.725 7.4525 7.725C7.3925 7.7025 7.3325 7.695 7.2725 7.6875C7.25 7.6875 7.235 7.6875 7.2125 7.6875C7.1675 7.6875 7.115 7.7025 7.07 7.7175C7.0475 7.725 7.0325 7.7325 7.0175 7.74C6.9575 7.77 6.8975 7.8 6.8525 7.8525L5.3525 9.3525C5.135 9.57 5.135 9.93 5.3525 10.1475C5.57 10.365 5.93 10.365 6.1475 10.1475L6.6875 9.6075V12.75C6.6875 13.0575 6.9425 13.3125 7.25 13.3125C7.5575 13.3125 7.8125 13.0575 7.8125 12.75V9.6075L8.3525 10.1475C8.465 10.26 8.6075 10.3125 8.75 10.3125C8.8925 10.3125 9.035 10.26 9.1475 10.1475C9.365 9.93 9.365 9.57 9.1475 9.3525Z" fill="white"/>
                            </svg>
                            <span x-show="fileName !== salaryAttachment.labelText">Delete</span>
                            <svg x-show="fileName !== salaryAttachment.labelText" class="pl-2" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="vuesax/bulk/close-circle">
                                <g id="close-circle">
                                <path id="Vector" opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="white" stroke="white"/>
                                <path id="Vector_2" d="M9.795 8.99953L11.52 7.27453C11.7375 7.05703 11.7375 6.69703 11.52 6.47953C11.3025 6.26203 10.9425 6.26203 10.725 6.47953L9 8.20453L7.275 6.47953C7.0575 6.26203 6.6975 6.26203 6.48 6.47953C6.2625 6.69703 6.2625 7.05703 6.48 7.27453L8.205 8.99953L6.48 10.7245C6.2625 10.942 6.2625 11.302 6.48 11.5195C6.5925 11.632 6.735 11.6845 6.8775 11.6845C7.02 11.6845 7.1625 11.632 7.275 11.5195L9 9.79453L10.725 11.5195C10.8375 11.632 10.98 11.6845 11.1225 11.6845C11.265 11.6845 11.4075 11.632 11.52 11.5195C11.7375 11.302 11.7375 10.942 11.52 10.7245L9.795 8.99953Z" fill="white"/>
                                </g>
                                </g>
                            </svg>
                            <template x-if="fileName === salaryAttachment.labelText">
                                <input type="file" name="doc_one" class="sr-only" wire:model.live="salaryUploads" @change="if (fileName === salaryAttachment.labelText) fileName = $event.target.files.length > 0 ? $event.target.files[0].name : salaryAttachment.labelText" x-ref="fileInput">
                            </template>
                            <template x-if="fileName !== salaryAttachment.labelText">
                                <button type="button" @click="fileName = salaryAttachment.labelText; $refs.fileInput.value = null;"></button>
                            </template>
                        </label>
                        @error('salaryUploads')
                            <span x-show="fileName === salaryAttachment.labelText" class="text-required-red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </template>
        </div>
        <div class="grid gap-x-10 gap-y-6" x-show="incomeSource === 'business'">
            <div class="flex flex-col gap-y-6" x-data="{ businessType: 'company' }">
                <div class="flex flex-col sm:flex-row items-center gap-4 w-full">
                    <div class="w-full sm:w-1/4">
                        <label>Select type of business:<span class="text-required-red">*</span></label>
                    </div>
                    <div class="flex w-full sm:w-3/4 gap-x-4">
                        <div class="flex items-center gap-2">
                            <input id="lc" class="peer/lc" type="radio" name="biz_type" value="company" x-model="businessType" checked wire:model="businessType"/>
                            <label for="lc" class="peer-checked/lc:text-brand-green">Limited Company</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input id="sole_biz" class="peer/sole_biz" type="radio" name="biz_type" value="partnership" x-model="businessType" wire:model="businessType"/>
                            <label for="sole_biz" class="peer-checked/sole_biz:text-brand-green">Sole Proprietorship/Partnership</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <label for="monthly_income">Enter your monthly income in Ksh.</label>
                    <input type="text" name="monthly_income" id="monthly_income" wire:model="monthlyIncome">
                </div>
                <div class="flex flex-col gap-y-6" x-show="businessType === 'company'">
                    <div class="flex flex-col w-full gap-2">
                        <label for="director_id">Copy of National ID/ Valid Passport for the Director(s):</label>
                    </div>
                    <div class="flex flex-col gap-y-6" x-data="{ directors: [{id: 1}] }">
                        <template x-for="(director, index) in directors" :key="director.id">
                            <div class="w-full flex items-center gap-x-10 gap-y-6" x-data="{fileName: 'Director'}">
                                <div class="w-2/5 sm:w-2/3 flex gap-2 custom-select">
                                    <label for="add_director">
                                        <span>
                                            <span x-text="fileName"></span>
                                            <span x-text="director.id"></span>
                                        </span>
                                        <span class="text-required-red">*</span>
                                    </label>
                                </div>    
                                <div class="w-3/5 sm:w-1/3 flex gap-2">
                                    <label :class="{'bg-red-800 hover:bg-required-red': fileName !== 'Director', 'bg-brand-green hover:bg-brand-light-green': fileName === 'Director'}" class="flex items-center justify-center px-6 py-3 text-sm rounded-lg text-white border-2 shadow-md">
                                        <span x-show="fileName === 'Director'">Attach</span>
                                        <svg x-show="fileName === 'Director'" class="pl-2" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M13.7075 8.1425H15.875C16.0114 8.1425 16.125 8.25614 16.125 8.3925V12.3225C16.125 13.5386 15.7045 14.4457 15.0602 15.0509C14.4109 15.6606 13.4954 16 12.4475 16H6.5525C5.50461 16 4.58905 15.6606 3.9398 15.0509C3.2955 14.4457 2.875 13.5386 2.875 12.3225V5.6775C2.875 4.46141 3.2955 3.55428 3.9398 2.94915C4.58905 2.33936 5.50461 2 6.5525 2H9.7325C9.86886 2 9.9825 2.11364 9.9825 2.25V4.4175C9.9825 6.47114 11.6539 8.1425 13.7075 8.1425Z" fill="white" stroke="white"/>
                                            <path d="M12.35 1.65786C12.0425 1.35036 11.51 1.56036 11.51 1.98786V4.60536C11.51 5.70036 12.44 6.60786 13.5725 6.60786C14.285 6.61536 15.275 6.61536 16.1225 6.61536C16.55 6.61536 16.775 6.11286 16.475 5.81286C15.395 4.72536 13.46 2.76786 12.35 1.65786Z" fill="white"/>
                                            <path d="M9.1475 9.3525L7.6475 7.8525C7.64 7.845 7.6325 7.845 7.6325 7.8375C7.5875 7.7925 7.5275 7.755 7.4675 7.725C7.46 7.725 7.46 7.725 7.4525 7.725C7.3925 7.7025 7.3325 7.695 7.2725 7.6875C7.25 7.6875 7.235 7.6875 7.2125 7.6875C7.1675 7.6875 7.115 7.7025 7.07 7.7175C7.0475 7.725 7.0325 7.7325 7.0175 7.74C6.9575 7.77 6.8975 7.8 6.8525 7.8525L5.3525 9.3525C5.135 9.57 5.135 9.93 5.3525 10.1475C5.57 10.365 5.93 10.365 6.1475 10.1475L6.6875 9.6075V12.75C6.6875 13.0575 6.9425 13.3125 7.25 13.3125C7.5575 13.3125 7.8125 13.0575 7.8125 12.75V9.6075L8.3525 10.1475C8.465 10.26 8.6075 10.3125 8.75 10.3125C8.8925 10.3125 9.035 10.26 9.1475 10.1475C9.365 9.93 9.365 9.57 9.1475 9.3525Z" fill="white"/>
                                        </svg>
                                        <span x-show="fileName !== 'Director'">Delete</span>
                                        <svg x-show="fileName !== 'Director'" class="pl-2" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/close-circle">
                                            <g id="close-circle">
                                            <path id="Vector" opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="white" stroke="white"/>
                                            <path id="Vector_2" d="M9.795 8.99953L11.52 7.27453C11.7375 7.05703 11.7375 6.69703 11.52 6.47953C11.3025 6.26203 10.9425 6.26203 10.725 6.47953L9 8.20453L7.275 6.47953C7.0575 6.26203 6.6975 6.26203 6.48 6.47953C6.2625 6.69703 6.2625 7.05703 6.48 7.27453L8.205 8.99953L6.48 10.7245C6.2625 10.942 6.2625 11.302 6.48 11.5195C6.5925 11.632 6.735 11.6845 6.8775 11.6845C7.02 11.6845 7.1625 11.632 7.275 11.5195L9 9.79453L10.725 11.5195C10.8375 11.632 10.98 11.6845 11.1225 11.6845C11.265 11.6845 11.4075 11.632 11.52 11.5195C11.7375 11.302 11.7375 10.942 11.52 10.7245L9.795 8.99953Z" fill="white"/>
                                            </g>
                                            </g>
                                        </svg>
                                        <template x-if="fileName === 'Director'">
                                            <input type="file" x-bind:name="'add_director' + director.id" wire:model.live="directors" class="sr-only" @change="if (fileName === 'Director') fileName = $event.target.files.length > 0 ? $event.target.files[0].name : 'Director'" x-ref="fileInput">
                                        </template>
                                        <template x-if="fileName !== 'Director'">
                                            <button type="button" @click="fileName = 'Director'; $refs.fileInput.value = null;"></button>
                                        </template>
                                    </label>
                                    @error('directors')
                                        <span x-show="fileName === 'Director'" class="text-required-red">{{ $message }}</span>
                                    @enderror
                                    <!-- Delete Button -->
                                    <label x-show="index > 0" class="flex items-center justify-center px-6 py-3 text-sm rounded-lg bg-red-800 hover:bg-required-red text-white border-2 shadow-md" @click="directors = directors.filter((_, i) => i !== index)">
                                        <svg height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/close-circle">
                                            <g id="close-circle">
                                            <path id="Vector" opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="white" stroke="white"/>
                                            <path id="Vector_2" d="M9.795 8.99953L11.52 7.27453C11.7375 7.05703 11.7375 6.69703 11.52 6.47953C11.3025 6.26203 10.9425 6.26203 10.725 6.47953L9 8.20453L7.275 6.47953C7.0575 6.26203 6.6975 6.26203 6.48 6.47953C6.2625 6.69703 6.2625 7.05703 6.48 7.27453L8.205 8.99953L6.48 10.7245C6.2625 10.942 6.2625 11.302 6.48 11.5195C6.5925 11.632 6.735 11.6845 6.8775 11.6845C7.02 11.6845 7.1625 11.632 7.275 11.5195L9 9.79453L10.725 11.5195C10.8375 11.632 10.98 11.6845 11.1225 11.6845C11.265 11.6845 11.4075 11.632 11.52 11.5195C11.7375 11.302 11.7375 10.942 11.52 10.7245L9.795 8.99953Z" fill="white"/>
                                            </g>
                                            </g>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </template>
                        <div class="flex gap-2">
                            <label class="flex items-center justify-center px-6 py-3 text-sm rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md" @click="directors.push({id: directors.length + 1})">
                                <span>Add Director</span>
                                <svg class="pl-2" width="25" height="24" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.5 9C16.5 12.866 13.366 16 9.5 16C5.63401 16 2.5 12.866 2.5 9C2.5 5.13401 5.63401 2 9.5 2C13.366 2 16.5 5.13401 16.5 9Z" fill="white" stroke="white"/>
                                    <path d="M12.5 8.4375H10.0625V6C10.0625 5.6925 9.8075 5.4375 9.5 5.4375C9.1925 5.4375 8.9375 5.6925 8.9375 6V8.4375H6.5C6.1925 8.4375 5.9375 8.6925 5.9375 9C5.9375 9.3075 6.1925 9.5625 6.5 9.5625H8.9375V12C8.9375 12.3075 9.1925 12.5625 9.5 12.5625C9.8075 12.5625 10.0625 12.3075 10.0625 12V9.5625H12.5C12.8075 9.5625 13.0625 9.3075 13.0625 9C13.0625 8.6925 12.8075 8.4375 12.5 8.4375Z" fill="white"/>
                                </svg>     
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-6" x-data='{
                        directorAttachments: <?php echo json_encode($companyDocs->map(function($doc) {
                            return [
                                "id" => $doc->id,
                                "elementDetail" => \Illuminate\Support\Str::snake($doc->name),
                                "labelFor" => \Illuminate\Support\Str::slug($doc->name, "_"),
                                "labelText" => $doc->name,
                            ];
                        })->toArray());?>
                    }'>
                        <template x-for="(directorAttachment, index) in directorAttachments" :key="index">
                            <div class="w-full flex items-center gap-x-10 gap-y-6" x-data="{ fileName: directorAttachment.labelText }">
                                <div class="w-2/3 flex gap-2 custom-select">
                                    <label x-bind:for="directorAttachment.labelFor">
                                        <span x-text="fileName"></span>
                                        <span class="text-required-red">*</span>
                                    </label>
                                </div>    
                                <div class="w-1/3 flex gap-2">
                                    <label :class="{'bg-red-800 hover:bg-required-red': fileName !== directorAttachment.labelText, 'bg-brand-green hover:bg-brand-light-green': fileName === directorAttachment.labelText}" class="flex items-center justify-center px-6 py-3 text-sm rounded-lg text-white border-2 shadow-md">
                                        <span x-show="fileName === directorAttachment.labelText">Attach</span>
                                        <svg x-show="fileName === directorAttachment.labelText" class="pl-2" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M13.7075 8.1425H15.875C16.0114 8.1425 16.125 8.25614 16.125 8.3925V12.3225C16.125 13.5386 15.7045 14.4457 15.0602 15.0509C14.4109 15.6606 13.4954 16 12.4475 16H6.5525C5.50461 16 4.58905 15.6606 3.9398 15.0509C3.2955 14.4457 2.875 13.5386 2.875 12.3225V5.6775C2.875 4.46141 3.2955 3.55428 3.9398 2.94915C4.58905 2.33936 5.50461 2 6.5525 2H9.7325C9.86886 2 9.9825 2.11364 9.9825 2.25V4.4175C9.9825 6.47114 11.6539 8.1425 13.7075 8.1425Z" fill="white" stroke="white"/>
                                            <path d="M12.35 1.65786C12.0425 1.35036 11.51 1.56036 11.51 1.98786V4.60536C11.51 5.70036 12.44 6.60786 13.5725 6.60786C14.285 6.61536 15.275 6.61536 16.1225 6.61536C16.55 6.61536 16.775 6.11286 16.475 5.81286C15.395 4.72536 13.46 2.76786 12.35 1.65786Z" fill="white"/>
                                            <path d="M9.1475 9.3525L7.6475 7.8525C7.64 7.845 7.6325 7.845 7.6325 7.8375C7.5875 7.7925 7.5275 7.755 7.4675 7.725C7.46 7.725 7.46 7.725 7.4525 7.725C7.3925 7.7025 7.3325 7.695 7.2725 7.6875C7.25 7.6875 7.235 7.6875 7.2125 7.6875C7.1675 7.6875 7.115 7.7025 7.07 7.7175C7.0475 7.725 7.0325 7.7325 7.0175 7.74C6.9575 7.77 6.8975 7.8 6.8525 7.8525L5.3525 9.3525C5.135 9.57 5.135 9.93 5.3525 10.1475C5.57 10.365 5.93 10.365 6.1475 10.1475L6.6875 9.6075V12.75C6.6875 13.0575 6.9425 13.3125 7.25 13.3125C7.5575 13.3125 7.8125 13.0575 7.8125 12.75V9.6075L8.3525 10.1475C8.465 10.26 8.6075 10.3125 8.75 10.3125C8.8925 10.3125 9.035 10.26 9.1475 10.1475C9.365 9.93 9.365 9.57 9.1475 9.3525Z" fill="white"/>
                                        </svg>
                                        <span x-show="fileName !== directorAttachment.labelText">Delete</span>
                                        <svg x-show="fileName !== directorAttachment.labelText" class="pl-2" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/close-circle">
                                            <g id="close-circle">
                                            <path id="Vector" opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="white" stroke="white"/>
                                            <path id="Vector_2" d="M9.795 8.99953L11.52 7.27453C11.7375 7.05703 11.7375 6.69703 11.52 6.47953C11.3025 6.26203 10.9425 6.26203 10.725 6.47953L9 8.20453L7.275 6.47953C7.0575 6.26203 6.6975 6.26203 6.48 6.47953C6.2625 6.69703 6.2625 7.05703 6.48 7.27453L8.205 8.99953L6.48 10.7245C6.2625 10.942 6.2625 11.302 6.48 11.5195C6.5925 11.632 6.735 11.6845 6.8775 11.6845C7.02 11.6845 7.1625 11.632 7.275 11.5195L9 9.79453L10.725 11.5195C10.8375 11.632 10.98 11.6845 11.1225 11.6845C11.265 11.6845 11.4075 11.632 11.52 11.5195C11.7375 11.302 11.7375 10.942 11.52 10.7245L9.795 8.99953Z" fill="white"/>
                                            </g>
                                            </g>
                                        </svg>
                                        <template x-if="fileName === directorAttachment.labelText">
                                            <input type="file" name="doc_one" class="sr-only" wire:model.live="companyUploads" @change="if (fileName === directorAttachment.labelText) fileName = $event.target.files.length > 0 ? $event.target.files[0].name : directorAttachment.labelText" x-ref="fileInput">
                                        </template>
                                        <template x-if="fileName !== directorAttachment.labelText">
                                            <button type="button" @click="fileName = directorAttachment.labelText; $refs.fileInput.value = null;"></button>
                                        </template>
                                    </label>
                                    @error('companyUploads')
                                        <span x-show="fileName === directorAttachment.labelText" class="text-required-red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="flex flex-col gap-y-6" x-show="businessType === 'partnership'">
                    <div class="flex flex-col w-full gap-2">
                        <label for="owner_id">Copy of National ID/ Valid Passport for the business owner(s):</label>
                    </div>
                    <div class="flex flex-col gap-y-6" x-data="{ owners: [{id: 1}] }">
                        <template x-for="(owner, index) in owners" :key="index">
                            <div class="w-full flex items-center gap-x-10 gap-y-6" x-data="{fileName: 'Owner'}">
                                <div class="w-2/5 sm:w-2/3 flex gap-2 custom-select">
                                    <label for="add_owner">
                                        <span>
                                            <span x-text="fileName"></span>
                                            <span x-text="owner.id"></span>
                                        </span>
                                        <span class="text-required-red">*</span>
                                    </label>
                                </div>    
                                <div class="w-3/5 sm:w-1/3 flex gap-2">
                                    <label :class="{'bg-red-800 hover:bg-required-red': fileName !== 'Owner', 'bg-brand-green hover:bg-brand-light-green': fileName === 'Owner'}" class="flex items-center justify-center px-6 py-3 text-sm rounded-lg text-white border-2 shadow-md">
                                        <span x-show="fileName === 'Owner'">Attach</span>
                                        <svg x-show="fileName === 'Owner'" class="pl-2" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M13.7075 8.1425H15.875C16.0114 8.1425 16.125 8.25614 16.125 8.3925V12.3225C16.125 13.5386 15.7045 14.4457 15.0602 15.0509C14.4109 15.6606 13.4954 16 12.4475 16H6.5525C5.50461 16 4.58905 15.6606 3.9398 15.0509C3.2955 14.4457 2.875 13.5386 2.875 12.3225V5.6775C2.875 4.46141 3.2955 3.55428 3.9398 2.94915C4.58905 2.33936 5.50461 2 6.5525 2H9.7325C9.86886 2 9.9825 2.11364 9.9825 2.25V4.4175C9.9825 6.47114 11.6539 8.1425 13.7075 8.1425Z" fill="white" stroke="white"/>
                                            <path d="M12.35 1.65786C12.0425 1.35036 11.51 1.56036 11.51 1.98786V4.60536C11.51 5.70036 12.44 6.60786 13.5725 6.60786C14.285 6.61536 15.275 6.61536 16.1225 6.61536C16.55 6.61536 16.775 6.11286 16.475 5.81286C15.395 4.72536 13.46 2.76786 12.35 1.65786Z" fill="white"/>
                                            <path d="M9.1475 9.3525L7.6475 7.8525C7.64 7.845 7.6325 7.845 7.6325 7.8375C7.5875 7.7925 7.5275 7.755 7.4675 7.725C7.46 7.725 7.46 7.725 7.4525 7.725C7.3925 7.7025 7.3325 7.695 7.2725 7.6875C7.25 7.6875 7.235 7.6875 7.2125 7.6875C7.1675 7.6875 7.115 7.7025 7.07 7.7175C7.0475 7.725 7.0325 7.7325 7.0175 7.74C6.9575 7.77 6.8975 7.8 6.8525 7.8525L5.3525 9.3525C5.135 9.57 5.135 9.93 5.3525 10.1475C5.57 10.365 5.93 10.365 6.1475 10.1475L6.6875 9.6075V12.75C6.6875 13.0575 6.9425 13.3125 7.25 13.3125C7.5575 13.3125 7.8125 13.0575 7.8125 12.75V9.6075L8.3525 10.1475C8.465 10.26 8.6075 10.3125 8.75 10.3125C8.8925 10.3125 9.035 10.26 9.1475 10.1475C9.365 9.93 9.365 9.57 9.1475 9.3525Z" fill="white"/>
                                        </svg>
                                        <span x-show="fileName !== 'Owner'">Delete</span>
                                        <svg x-show="fileName !== 'Owner'" class="pl-2" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/close-circle">
                                            <g id="close-circle">
                                            <path id="Vector" opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="white" stroke="white"/>
                                            <path id="Vector_2" d="M9.795 8.99953L11.52 7.27453C11.7375 7.05703 11.7375 6.69703 11.52 6.47953C11.3025 6.26203 10.9425 6.26203 10.725 6.47953L9 8.20453L7.275 6.47953C7.0575 6.26203 6.6975 6.26203 6.48 6.47953C6.2625 6.69703 6.2625 7.05703 6.48 7.27453L8.205 8.99953L6.48 10.7245C6.2625 10.942 6.2625 11.302 6.48 11.5195C6.5925 11.632 6.735 11.6845 6.8775 11.6845C7.02 11.6845 7.1625 11.632 7.275 11.5195L9 9.79453L10.725 11.5195C10.8375 11.632 10.98 11.6845 11.1225 11.6845C11.265 11.6845 11.4075 11.632 11.52 11.5195C11.7375 11.302 11.7375 10.942 11.52 10.7245L9.795 8.99953Z" fill="white"/>
                                            </g>
                                            </g>
                                        </svg>
                                        <template x-if="fileName === 'Owner'">
                                            <input type="file" x-bind:name="'add_owner' + owner.id" wire:model.live="owners" class="sr-only" @change="if (fileName === 'Owner') fileName = $event.target.files.length > 0 ? $event.target.files[0].name : 'Owner'" x-ref="fileInput">
                                        </template>
                                        <template x-if="fileName !== 'Owner'">
                                            <button type="button" @click="fileName = 'Owner'; $refs.fileInput.value = null;"></button>
                                        </template>
                                    </label>
                                    @error('owners')
                                        <span x-show="fileName === 'Owner'" class="text-required-red">{{ $message }}</span>
                                    @enderror
                                    <!-- Delete Button -->
                                    <label x-show="index > 0" class="flex items-center justify-center px-6 py-3 text-sm rounded-lg bg-red-800 hover:bg-required-red text-white border-2 shadow-md" @click="owners = owners.filter((_, i) => i !== index)">
                                        <svg height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/close-circle">
                                            <g id="close-circle">
                                            <path id="Vector" opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="white" stroke="white"/>
                                            <path id="Vector_2" d="M9.795 8.99953L11.52 7.27453C11.7375 7.05703 11.7375 6.69703 11.52 6.47953C11.3025 6.26203 10.9425 6.26203 10.725 6.47953L9 8.20453L7.275 6.47953C7.0575 6.26203 6.6975 6.26203 6.48 6.47953C6.2625 6.69703 6.2625 7.05703 6.48 7.27453L8.205 8.99953L6.48 10.7245C6.2625 10.942 6.2625 11.302 6.48 11.5195C6.5925 11.632 6.735 11.6845 6.8775 11.6845C7.02 11.6845 7.1625 11.632 7.275 11.5195L9 9.79453L10.725 11.5195C10.8375 11.632 10.98 11.6845 11.1225 11.6845C11.265 11.6845 11.4075 11.632 11.52 11.5195C11.7375 11.302 11.7375 10.942 11.52 10.7245L9.795 8.99953Z" fill="white"/>
                                            </g>
                                            </g>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </template>
                        <div class="flex gap-2">
                            <label class="flex items-center justify-center px-6 py-3 text-sm rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md" @click="owners.push({id: owners.length + 1})">
                                <span>Add Owner</span>
                                <svg class="pl-2" width="25" height="24" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.5 9C16.5 12.866 13.366 16 9.5 16C5.63401 16 2.5 12.866 2.5 9C2.5 5.13401 5.63401 2 9.5 2C13.366 2 16.5 5.13401 16.5 9Z" fill="white" stroke="white"/>
                                    <path d="M12.5 8.4375H10.0625V6C10.0625 5.6925 9.8075 5.4375 9.5 5.4375C9.1925 5.4375 8.9375 5.6925 8.9375 6V8.4375H6.5C6.1925 8.4375 5.9375 8.6925 5.9375 9C5.9375 9.3075 6.1925 9.5625 6.5 9.5625H8.9375V12C8.9375 12.3075 9.1925 12.5625 9.5 12.5625C9.8075 12.5625 10.0625 12.3075 10.0625 12V9.5625H12.5C12.8075 9.5625 13.0625 9.3075 13.0625 9C13.0625 8.6925 12.8075 8.4375 12.5 8.4375Z" fill="white"/>
                                </svg>     
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-6" x-data='{
                        bizownerAttachments: <?php echo json_encode($partnershipDocs->map(function($doc) {
                            return [
                                "id" => $doc->id,
                                "elementDetail" => \Illuminate\Support\Str::snake($doc->name),
                                "labelFor" => \Illuminate\Support\Str::slug($doc->name, "_"),
                                "labelText" => $doc->name,
                            ];
                        })->toArray());?>
                    }'>
                        <template x-for="(bizownerAttachment, index) in bizownerAttachments" :key="index">
                            <div class="w-full flex items-center gap-x-10 gap-y-6" x-data="{ fileName: bizownerAttachment.labelText }">
                                <div class="w-2/3 flex gap-2 custom-select">
                                    <label x-bind:for="bizownerAttachment.labelFor">
                                        <span x-text="fileName"></span>
                                        <span class="text-required-red">*</span>
                                    </label>
                                </div>    
                                <div class="w-1/3 flex gap-2">
                                    <label :class="{'bg-red-800 hover:bg-required-red': fileName !== bizownerAttachment.labelText, 'bg-brand-green hover:bg-brand-light-green': fileName === bizownerAttachment.labelText}" class="flex items-center justify-center px-6 py-3 text-sm rounded-lg text-white border-2 shadow-md">
                                        <span x-show="fileName === bizownerAttachment.labelText">Attach</span>
                                        <svg x-show="fileName === bizownerAttachment.labelText" class="pl-2" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M13.7075 8.1425H15.875C16.0114 8.1425 16.125 8.25614 16.125 8.3925V12.3225C16.125 13.5386 15.7045 14.4457 15.0602 15.0509C14.4109 15.6606 13.4954 16 12.4475 16H6.5525C5.50461 16 4.58905 15.6606 3.9398 15.0509C3.2955 14.4457 2.875 13.5386 2.875 12.3225V5.6775C2.875 4.46141 3.2955 3.55428 3.9398 2.94915C4.58905 2.33936 5.50461 2 6.5525 2H9.7325C9.86886 2 9.9825 2.11364 9.9825 2.25V4.4175C9.9825 6.47114 11.6539 8.1425 13.7075 8.1425Z" fill="white" stroke="white"/>
                                            <path d="M12.35 1.65786C12.0425 1.35036 11.51 1.56036 11.51 1.98786V4.60536C11.51 5.70036 12.44 6.60786 13.5725 6.60786C14.285 6.61536 15.275 6.61536 16.1225 6.61536C16.55 6.61536 16.775 6.11286 16.475 5.81286C15.395 4.72536 13.46 2.76786 12.35 1.65786Z" fill="white"/>
                                            <path d="M9.1475 9.3525L7.6475 7.8525C7.64 7.845 7.6325 7.845 7.6325 7.8375C7.5875 7.7925 7.5275 7.755 7.4675 7.725C7.46 7.725 7.46 7.725 7.4525 7.725C7.3925 7.7025 7.3325 7.695 7.2725 7.6875C7.25 7.6875 7.235 7.6875 7.2125 7.6875C7.1675 7.6875 7.115 7.7025 7.07 7.7175C7.0475 7.725 7.0325 7.7325 7.0175 7.74C6.9575 7.77 6.8975 7.8 6.8525 7.8525L5.3525 9.3525C5.135 9.57 5.135 9.93 5.3525 10.1475C5.57 10.365 5.93 10.365 6.1475 10.1475L6.6875 9.6075V12.75C6.6875 13.0575 6.9425 13.3125 7.25 13.3125C7.5575 13.3125 7.8125 13.0575 7.8125 12.75V9.6075L8.3525 10.1475C8.465 10.26 8.6075 10.3125 8.75 10.3125C8.8925 10.3125 9.035 10.26 9.1475 10.1475C9.365 9.93 9.365 9.57 9.1475 9.3525Z" fill="white"/>
                                        </svg>
                                        <span x-show="fileName !== bizownerAttachment.labelText">Delete</span>
                                        <svg x-show="fileName !== bizownerAttachment.labelText" class="pl-2" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/close-circle">
                                            <g id="close-circle">
                                            <path id="Vector" opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="white" stroke="white"/>
                                            <path id="Vector_2" d="M9.795 8.99953L11.52 7.27453C11.7375 7.05703 11.7375 6.69703 11.52 6.47953C11.3025 6.26203 10.9425 6.26203 10.725 6.47953L9 8.20453L7.275 6.47953C7.0575 6.26203 6.6975 6.26203 6.48 6.47953C6.2625 6.69703 6.2625 7.05703 6.48 7.27453L8.205 8.99953L6.48 10.7245C6.2625 10.942 6.2625 11.302 6.48 11.5195C6.5925 11.632 6.735 11.6845 6.8775 11.6845C7.02 11.6845 7.1625 11.632 7.275 11.5195L9 9.79453L10.725 11.5195C10.8375 11.632 10.98 11.6845 11.1225 11.6845C11.265 11.6845 11.4075 11.632 11.52 11.5195C11.7375 11.302 11.7375 10.942 11.52 10.7245L9.795 8.99953Z" fill="white"/>
                                            </g>
                                            </g>
                                        </svg>
                                        <template x-if="fileName === bizownerAttachment.labelText">
                                            <input type="file" name="doc_one" class="sr-only" wire:model.live="partnershipUploads" @change="if (fileName === bizownerAttachment.labelText) fileName = $event.target.files.length > 0 ? $event.target.files[0].name : bizownerAttachment.labelText" x-ref="fileInput">
                                        </template>
                                        <template x-if="fileName !== bizownerAttachment.labelText">
                                            <button type="button" @click="fileName = bizownerAttachment.labelText; $refs.fileInput.value = null;"></button>
                                        </template>
                                    </label>
                                    @error('partnershipUploads')
                                        <span x-show="fileName === bizownerAttachment.labelText" class="text-required-red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-start gap-y-6" x-data="{ extraIncome: 'no' }">
            <div class="flex flex-col sm:flex-row gap-6 w-full">
                <div class="w-full sm:w-2/5">
                    <label>Do you have other sources of income?<span class="text-required-red">*</span></label>
                </div>
                <div class="flex w-full sm:w-3/5 gap-x-8">
                    <div class="flex items-center gap-2">
                        <input id="income_yes" class="peer/income_yes" type="radio" name="add_income" value="yes" x-model="extraIncome" checked wire:model="extraIncome"/>
                        <label for="income_yes" class="peer-checked/income_yes:text-brand-green">Yes</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input id="income_no" class="peer/income_no" type="radio" name="add_income" value="no" x-model="extraIncome" wire:model="extraIncome"/>
                        <label for="income_no" class="peer-checked/income_no:text-brand-green">No</label>
                    </div>
                </div>
            </div>
            <div x-show="extraIncome === 'yes'">
                <div class="flex flex-col gap-y-6" x-data="incomeSourcesComponent()">
                    <template x-for="(sourceIncome, index) in sourceIncomes" :key="sourceIncome.id">
                        <div class="flex items-end gap-4">
                            <div class="grid grid-cols-2 gap-x-10 gap-y-6">
                                <div class="grid grid-cols-1 gap-2">
                                    <label for="source_income">Source of income</label>
                                    <input type="text" :name="'source_income[' + index + ']'" x-model="sourceIncome.source" @input="updateIncome(index, 'source', $event.target.value)">
                                </div>
                                <div class="grid grid-cols-1 gap-2">
                                    <label for="amt_income">Amount of income in Ksh.</label>
                                    <input type="number" :name="'amt_income[' + index + ']'" x-model="sourceIncome.amount" @input="updateIncome(index, 'amount', $event.target.value)">
                                </div>
                            </div>
                            <!-- Delete Button -->
                            <div>
                                <label x-show="index > 0" class="flex items-center justify-center px-6 py-3 text-sm rounded-lg bg-red-800 hover:bg-required-red text-white border-2 shadow-md" @click="removeIncome(index)">
                                    <svg height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="vuesax/bulk/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector" opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="white" stroke="white"/>
                                                <path id="Vector_2" d="M9.795 8.99953L11.52 7.27453C11.7375 7.05703 11.7375 6.69703 11.52 6.47953C11.3025 6.26203 10.9425 6.26203 10.725 6.47953L9 8.20453L7.275 6.47953C7.0575 6.26203 6.6975 6.26203 6.48 6.47953C6.2625 6.69703 6.2625 7.05703 6.48 7.27453L8.205 8.99953L6.48 10.7245C6.2625 10.942 6.2625 11.302 6.48 11.5195C6.5925 11.632 6.735 11.6845 6.8775 11.6845C7.02 11.6845 7.1625 11.632 7.275 11.5195L9 9.79453L10.725 11.5195C10.8375 11.632 10.98 11.6845 11.1225 11.6845C11.265 11.6845 11.4075 11.632 11.52 11.5195C11.7375 11.302 11.7375 10.942 11.52 10.7245L9.795 8.99953Z" fill="white"/>
                                            </g>
                                        </g>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </template>
                    <div class="flex gap-2 my-2">
                        <label class="flex items-center justify-center px-6 py-3 text-sm rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md" @click="addIncome">
                            <span>Add New Income</span>
                            <svg class="pl-2" width="25" height="24" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M16.5 9C16.5 12.866 13.366 16 9.5 16C5.63401 16 2.5 12.866 2.5 9C2.5 5.13401 5.63401 2 9.5 2C13.366 2 16.5 5.13401 16.5 9Z" fill="white" stroke="white"/>
                                <path d="M12.5 8.4375H10.0625V6C10.0625 5.6925 9.8075 5.4375 9.5 5.4375C9.1925 5.4375 8.9375 5.6925 8.9375 6V8.4375H6.5C6.1925 8.4375 5.9375 8.6925 5.9375 9C5.9375 9.3075 6.1925 9.5625 6.5 9.5625H8.9375V12C8.9375 12.3075 9.1925 12.5625 9.5 12.5625C9.8075 12.5625 10.0625 12.3075 10.0625 12V9.5625H12.5C12.8075 9.5625 13.0625 9.3075 13.0625 9C13.0625 8.6925 12.8075 8.4375 12.5 8.4375Z" fill="white"/>
                            </svg>     
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-start gap-y-6" x-data="{ addInsurance: 'yes' }">
            <div class="flex flex-col sm:flex-row gap-6 w-full">
                <div class="w-full sm:w-1/2">
                    <label>Are you interested in adding insurance?<span class="text-required-red">*</span></label>
                </div>
                <div class="flex w-full sm:w-1/2 gap-x-8">
                    <div class="flex items-center gap-2">
                        <input id="ins_yes" class="peer/ins_yes" type="radio" name="add_ins" value="yes" x-model="addInsurance" checked wire:model="addInsurance"/>
                        <label for="ins_yes" class="peer-checked/ins_yes:text-brand-green">Yes</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input id="ins_no" class="peer/ins_no" type="radio" name="add_ins" value="no" x-model="addInsurance" wire:model="addInsurance"/>
                        <label for="ins_no" class="peer-checked/ins_no:text-brand-green">No</label>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col gap-2 custom-select" x-show="addInsurance === 'yes'">
                <label for="insurancecompany">Select your preferred insurance company<span class="text-required-red">*</span></label>
                <div x-data="{ selected: @entangle('insuranceCompany') }" x-init="() => {
                    const select = $('#insurancecompanyone').select2();
                    select.on('change', () => { selected = select.val(); });
                }" class="w-full flex flex-col">
                    <select id="insurancecompanyone" name="insuranceCompany" x-model="selected" wire:model="insuranceCompany" autocomplete="insuranceCompany">
                        <option value="" disabled selected style="color: #A0AEC0;">Select insurance company</option>
                        @foreach ($insuranceCompanies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('insuranceCompany')
                    <span class="text-required-red">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-x-10 gap-y-6" x-show="addInsurance === 'yes'">
                <div class="flex flex-col sm:flex-row gap-6 w-full">
                    <div class="w-full sm:w-1/2">
                        <label>Are you interested in insurance premium financing?<span class="text-required-red">*</span></label>
                    </div>
                    <div class="flex w-full sm:w-1/2 gap-x-8">
                        <div class="flex items-center gap-2">
                            <input id="ins_fin_yes" class="peer/ins_fin_yes" type="radio" name="ins_finance" value="yes" wire:model="premiumFinancing" checked/>
                            <label for="ins_fin_yes" class="peer-checked/ins_fin_yes:text-brand-green">Yes</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input id="ins_fin_no" class="peer/ins_fin_no" type="radio" name="ins_finance" value="no" wire:model="premiumFinancing"/>
                            <label for="ins_fin_no" class="peer-checked/ins_fin_no:text-brand-green">No</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-8 justify-center mt-5">
            <div class="flex flex-col justify-center sm:flex-row gap-4">
                <button type="button" @click="step--" class="w-52 flex items-center justify-center px-4 py-2 text-sm rounded-lg bg-white border-brand-green hover:border-brand-light-green hover:bg-brand-light-green text-brand-dark-green border-2 shadow-md text-center">
                    <svg class="pr-2" width="30" height="29" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M16.625 9C16.625 12.935 13.435 16.125 9.5 16.125C5.56497 16.125 2.375 12.935 2.375 9C2.375 5.06497 5.56497 1.875 9.5 1.875C13.435 1.875 16.625 5.06497 16.625 9Z" fill="#054E3B" stroke="#054E3B" stroke-width="0.75"/>
                        <path d="M10.445 12.2101C10.3025 12.2101 10.16 12.1576 10.0475 12.0451L7.4 9.39762C7.1825 9.18012 7.1825 8.82012 7.4 8.60262L10.0475 5.95512C10.265 5.73762 10.625 5.73762 10.8425 5.95512C11.06 6.17262 11.06 6.53262 10.8425 6.75012L8.5925 9.00012L10.8425 11.2501C11.06 11.4676 11.06 11.8276 10.8425 12.0451C10.7375 12.1576 10.595 12.2101 10.445 12.2101Z" fill="white"/>
                    </svg>                              
                    Previous                      
                </button>
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

<script>
    function showSelectedDocument(event) {
        if (event.target.files.length > 0) {
            this.fileName = event.target.files[0].name;
            var file = event.target.files[0]; // This is the file object
            // You can now use the file object for other operations
        }
    }
    function incomeSourcesComponent() {
        return {
            sourceIncomes: [{ id: 1, source: '', amount: '' }],
            addIncome() {
                this.sourceIncomes.push({ id: this.sourceIncomes.length + 1, source: '', amount: '' });
                this.$wire.addIncomeSource();
            },
            removeIncome(index) {
                this.sourceIncomes.splice(index, 1);
                this.$wire.removeIncomeSource(index);
            },
            updateIncome(index, field, value) {
                this.sourceIncomes[index][field] = value;
                this.$wire.updateIncomeSource(index, field, value);
            }
        }
    }
</script>