<div>

    <div x-data="{ newLoanModalOpen: false }">
        <div x-data="{}" x-ref="search" x-show="newLoanModalOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex min-h-full items-center justify-center p-4 text-center">
                <div x-cloak @click="newLoanModalOpen = false" x-show="newLoanModalOpen" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0" 
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" 
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                </div>

                <div class="relative bg-white border-solid border-2 border-brand-green rounded-lg mx-auto max-w-3xl pt-4 pb-10 px-4" x-data="{}" x-cloak x-show="newLoanModalOpen"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <div class="flex items-center space-x-4 justify-end">
                        <button type="button" @click="newLoanModalOpen = false" class="hover:opacity-80">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.55558 15.9998C3.55558 9.14409 9.14427 3.55539 16 3.55539C22.8558 3.55539 28.4445 9.14409 28.4445 15.9998C28.4445 22.8556 22.8558 28.4443 16 28.4443C9.14427 28.4443 3.55558 22.8556 3.55558 15.9998ZM19.7734 21.6621C20.2497 21.6621 20.7331 21.4839 21.1086 21.1084C21.8424 20.3746 21.8424 19.1718 21.1086 18.438L18.6704 15.9998L21.1086 13.5617C21.8424 12.8279 21.8424 11.6251 21.1086 10.8913C20.3748 10.1575 19.1719 10.1575 18.4381 10.8913L16 13.3294L13.5619 10.8913C12.8281 10.1575 11.6253 10.1575 10.8915 10.8913C10.1577 11.6251 10.1577 12.8279 10.8915 13.5617L13.3296 15.9998L10.8915 18.438C10.1577 19.1718 10.1577 20.3746 10.8915 21.1084C11.267 21.4839 11.7503 21.6621 12.2267 21.6621C12.703 21.6621 13.1864 21.4839 13.5619 21.1084L16 18.6702L18.4381 21.1084C18.8136 21.4839 19.297 21.6621 19.7734 21.6621Z" fill="#CA4B3D" stroke="#CA4B3D" stroke-width="1.77778"/>
                            </svg>                                
                        </button>
                    </div>
                    <div class="w-full flex flex-col justify-start items-start gap-4 px-5">
                        <div class="w-full flex justify-start items-start gap-10">
                            <div class="grid gap-4 justify-items-start">
                                <h4 class="text-brand-green">Apply for new loan</h4>
                                <form action="" class="flex gap-4 flex-col">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6">
                                        <div class="grid grid-cols-1 gap-2">
                                            <label for="famount" class="text-left">
                                                Amount to be financed 
                                                <span class="text-required-red">*</span>
                                            </label>
                                            <input type="number" name="famount" id="famount" placeholder="KSH.">
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 custom-select">
                                            <label for="dealer" class="text-left">Select dealer 
                                                <span class="text-required-red">*</span>
                                            </label>
                                            <select name="dealer" autocomplete="dealer">
                                                <option value="" disabled selected style="color: #A0AEC0;">Select dealer</option>
                                                <option value="Automotors Ltd">Automotors Ltd</option>
                                                <option value="Xyz Motors">Xyz Motors</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div x-data="{ incomeSource: 'salary' }" class="w-full grid justify-start gap-y-6 mb-0 sm:mb-4">
                                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                            <div>
                                                <label>Select source of income:</label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="salary" class="peer/salary" type="radio" name="income_source" checked @click="incomeSource = 'salary'"/>
                                                <label for="salary" class="peer-checked/salary:text-brand-green">Salary</label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="business" class="peer/business" type="radio" name="income_source" @click="incomeSource = 'business'"/>
                                                <label for="business" class="peer-checked/business:text-brand-green">Business</label>
                                            </div>
                                            <div x-show="incomeSource === 'salary'">
                                                <div class="mt-2 w-full flex justify-center">
                                                    <div class="w-52 px-4 py-2 flex items-center justify-center rounded-lg  bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md">
                                                        <label class="text-sm text-white">
                                                            Attach Payslip
                                                            <input type="file" class="sr-only">
                                                        </label>
                                                        <svg class="pl-2" width="25" height="25" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                                                            <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div x-show="incomeSource === 'business'">
                                                <div class="mt-2 w-full flex justify-center">
                                                    <div class="w-52 px-4 py-2 flex items-center justify-center rounded-lg  bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md">
                                                        <label class="text-sm text-white">
                                                            Attach Statement
                                                            <input type="file" class="sr-only">
                                                        </label>
                                                        <svg class="pl-2" width="25" height="25" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                                                            <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="flex flex-col items-start justify-start gap-y-6" x-data="{ extraIncome: 'yes' }">
                                        <div class="flex flex-col sm:flex-row gap-x-0 sm:gap-x-6 gap-y-4">
                                            <div>
                                                <label>Do you have other sources of income?<span class="text-required-red">*</span></label>
                                            </div>
                                            <div class="flex gap-6">
                                                <div class="flex items-center gap-2">
                                                    <input id="income_yes" class="peer/income_yes" type="radio" name="add_income" checked @click="extraIncome = 'yes'"/>
                                                    <label for="income_yes" class="peer-checked/income_yes:text-brand-green">Yes</label>
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <input id="income_no" class="peer/income_no" type="radio" name="add_income" @click="extraIncome = 'no'"/>
                                                    <label for="income_no" class="peer-checked/income_no:text-brand-green">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-show="extraIncome === 'yes'">
                                            <div class="flex flex-col gap-y-6" x-data="{ sourceIncomes: [{id: 1}] }">
                                                <template x-for="(sourceIncome, index) in sourceIncomes" :key="index">
                                                    <div class="flex items-end gap-4">
                                                        <div class="grid grid-cols-2 gap-4">
                                                            <div class="grid grid-cols-1 gap-2">
                                                                <label class="text-left" for="source_income">Source of income</label>
                                                                <input type="text" name="source_income" id="source_income">
                                                            </div>
                                                            <div class="grid grid-cols-1 gap-2">
                                                                <label class="text-left" for="amt_income">Amount of income in Ksh.</label>
                                                                <input type="number" name="amt_income" id="amt_income">
                                                            </div>
                                                        </div>
                                                        <!-- Delete Button -->
                                                        <div>
                                                            <label x-show="index > 0" class="flex items-center justify-center px-6 py-3 text-sm rounded-lg bg-red-800 hover:bg-required-red text-white" @click="sourceIncomes = sourceIncomes.filter((_, i) => i !== index)">
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
                                                <div class="flex gap-2 my-0 sm:my-2">
                                                    <label class="w-52 flex items-center justify-center px-6 py-3 text-sm rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md" @click="sourceIncomes.push({id: sourceIncomes.length + 1})">
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
                                    <div class="mt-0 sm:mt-2 w-full flex justify-start">
                                        <div class="w-52 px-4 py-2 flex items-center justify-start rounded-lg  bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md">
                                            <button type="submit" class="text-sm">
                                                Complete Application
                                            </button>
                                            <svg class="pl-2" width="25" height="25" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                                                <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                                            </svg>
                                        </div>
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Trigger button --}}
        <div class="w-full flex items-center justify-center mt-10" x-on:click="newLoanModalOpen = !newLoanModalOpen">
            <div class="w-60 xl:w-fit px-4 py-2 flex items-center justify-center rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md">
                <button type="button" class="text-sm">
                    Apply for Loan
                </button>
                <svg class="pl-2" width="25" height="25" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                    <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
                </svg>
            </div>
        </div>

    </div>

</div>
