<div class="w-full">
    <template x-for="(row, index) in rows" :key="index">
        <div class="grid grid-cols-7">
            <div class="flex py-4 border-t border-stroke"><span x-text="row.name"></span></div>
            <div class="flex py-4 border-t border-stroke"><span x-text="row.ref"></span></div>
            <div class="flex py-4 border-t border-stroke"><span x-text="row.app_date"></span></div>
            <div class="flex py-4 border-t border-stroke"><span x-text="row.amt_applied"></span></div>
            <div class="flex py-4 border-t border-stroke"><span x-text="row.sales_agent"></span></div>
            <template x-if="row.status === 'Approved'">
                <div class="flex py-4 border-t border-stroke">
                    <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                    <span class="text-approved-blue" x-text="row.status"></span>
                </div>
            </template>
            <template x-if="row.status === 'Pending'">
                <div class="flex py-4 border-t border-stroke">
                    <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="vp">
                    <span class="text-pending-yellow" x-text="row.status"></span>
                </div>
            </template>
            <template x-if="row.status === 'Denied'">
                <div class="flex py-4 border-t border-stroke">
                    <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="vp">
                    <span class="text-denied-red" x-text="row.status"></span>
                </div>
            </template>
            <div x-data="{ dealerAgentSidebarOpen: false }">
                <div x-data="{}" x-ref="search" x-show="dealerAgentSidebarOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex min-h-full items-start justify-end text-center">
                        <div x-cloak @click="dealerAgentSidebarOpen = false" x-show="dealerAgentSidebarOpen" 
                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:enter-start="translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full"
                        class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                        </div>
            
                        <div class="relative bg-white rounded-l-md max-w-3xl pt-6 pb-4 flex flex-col" x-data="{}" x-cloak x-show="dealerAgentSidebarOpen"
                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:enter-start="translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full">
                            <div class="flex flex-col">
                                <div class="flex w-full">
                                    <div class="flex flex-col w-full gap-4">
                                        <div class="flex items-center justify-between w-full">
                                            <div class="flex items-center justify-start px-8">
                                                <h5 class="text-brand-dark-green text-bold">Application Details</h5>
                                            </div>
                                            <div class="flex items-center justify-end px-4">
                                                <button type="button" @click="dealerAgentSidebarOpen = false" class="hover:opacity-80">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.55558 15.9998C3.55558 9.14409 9.14427 3.55539 16 3.55539C22.8558 3.55539 28.4445 9.14409 28.4445 15.9998C28.4445 22.8556 22.8558 28.4443 16 28.4443C9.14427 28.4443 3.55558 22.8556 3.55558 15.9998ZM19.7734 21.6621C20.2497 21.6621 20.7331 21.4839 21.1086 21.1084C21.8424 20.3746 21.8424 19.1718 21.1086 18.438L18.6704 15.9998L21.1086 13.5617C21.8424 12.8279 21.8424 11.6251 21.1086 10.8913C20.3748 10.1575 19.1719 10.1575 18.4381 10.8913L16 13.3294L13.5619 10.8913C12.8281 10.1575 11.6253 10.1575 10.8915 10.8913C10.1577 11.6251 10.1577 12.8279 10.8915 13.5617L13.3296 15.9998L10.8915 18.438C10.1577 19.1718 10.1577 20.3746 10.8915 21.1084C11.267 21.4839 11.7503 21.6621 12.2267 21.6621C12.703 21.6621 13.1864 21.4839 13.5619 21.1084L16 18.6702L18.4381 21.1084C18.8136 21.4839 19.297 21.6621 19.7734 21.6621Z" fill="#CA4B3D" stroke="#CA4B3D" stroke-width="1.77778"/>
                                                    </svg>                                
                                                </button>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-start px-8">
                                            <p class="text-brand-green text-bold">Personal Details</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full flex flex-col justify-start items-start gap-4">
                                    <div class="w-full">
                                        <div class="flex flex-col w-full">
                                            <div class="flex w-full">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>Name</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>John Doe</span>
                                                </div>
                                            </div>
                                            <div class="w-full flex border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>Email Address</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>john.doe@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="w-full flex border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>Phone Number</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>07123456789</span>
                                                </div>
                                            </div>
                                            <div class="w-full flex border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>ID/Passport Number</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>3784545353</span>
                                                </div>
                                            </div>
                                            <div class="w-full flex border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>KRA PIN</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>2345435453</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col pt-4">
                                <div class="flex w-full">
                                    <div class="flex flex-col w-full gap-4">
                                        <div class="flex items-center justify-start px-8">
                                            <p class="text-brand-green text-bold">Financial Details</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full flex flex-col justify-start items-start gap-4">
                                    <div class="w-full">
                                        <div class="flex flex-col w-full">
                                            <div class="flex w-full">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>Existing Customer</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>Yes</span>
                                                </div>
                                            </div>
                                            {{-- <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>Account Number</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>2743237648234</span>
                                                </div>
                                            </div> --}}
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>Amount Requested</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>1,500,200</span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>Request Status</span>
                                                </div>
                                                <div x-show="row.status === 'Approved'">
                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                        <img class="mr-2 w-20" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                                        <span class="text-approved-blue" x-text="row.status"></span>
                                                    </div>
                                                </div>
                                                <div x-show="row.status === 'Pending'">
                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                        <img class="mr-2 w-20" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                                        <span class="text-pending-yellow" x-text="row.status"></span>
                                                    </div>
                                                </div>
                                                <div x-show="row.status === 'Denied'">
                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                        <img class="mr-2 w-20" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                                        <span class="text-denied-red" x-text="row.status"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>Dealer</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>Automotors Ltd</span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>Sales Agent</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>Mark Smith</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col pt-4">
                                <div class="flex w-full">
                                    <div class="flex flex-col w-full gap-4">
                                        <div class="flex items-center justify-start px-8">
                                            <p class="text-brand-green text-bold">Income</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full flex flex-col justify-start items-start gap-4">
                                    <div class="w-full">
                                        <div class="flex flex-col w-full">
                                            <div class="flex w-full">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>Source of Income</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span>Salary</span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold border-t border-stroke">
                                                    <span>Other Sources of Income</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                    <span>YES</span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold border-t border-stroke">
                                                    <div class="flex flex-col gap-2">
                                                        <span>Source of Income #1</span>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                    <span>KSH. 320,000</span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold border-t border-stroke">
                                                    <div class="flex flex-col gap-2">
                                                        <span>Source of Income #2</span>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                    <span>KSH. 250,000</span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold border-t border-stroke">
                                                    <div class="flex flex-col gap-2">
                                                        <span>Source of Income #3</span>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                    <span>KSH. 130,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col pt-4">
                                <div class="flex w-full">
                                    <div class="flex flex-col w-full gap-4">
                                        <div class="flex items-center justify-start px-8">
                                            <p class="text-brand-green text-bold">Uploaded Documents</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full flex flex-col justify-start items-start gap-4">
                                    <div class="w-full">
                                        <div class="flex flex-col w-full">
                                            <div class="flex w-full">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                    <span>National ID</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                    <span class="text-theme-dark-blue">View ></span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold border-t border-stroke">
                                                    <span>PIN certificate</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                    <span class="text-theme-dark-blue">View ></span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold border-t border-stroke">
                                                    <span>Employment letter/contract letter</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                    <span class="text-theme-dark-blue">View ></span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold border-t border-stroke">
                                                    <span>3 months latest pay slips</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                    <span class="text-theme-dark-blue">View ></span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold border-t border-stroke">
                                                    <span>Proforma invoice/sale agreement</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                    <span class="text-theme-dark-blue">View ></span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold border-t border-stroke">
                                                    <span>Log book copy/import documents</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                    <span class="text-theme-dark-blue">View ></span>
                                                </div>
                                            </div>
                                            <div class="flex w-full border-t border-stroke">
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold border-t border-stroke">
                                                    <span>Valuation report</span>
                                                </div>
                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                    <span class="text-theme-dark-blue">View ></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-4 px-8 flex justify-start" x-on:click="dealerAgentSidebarOpen = !dealerAgentSidebarOpen">
                                <button type="button" class="flex items-center justify-center px-4 py-2 text-sm rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md">
                                    Close Details
                                    <svg class="pl-2" width="30" height="29" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="vuesax/bold/close-circle">
                                        <g id="close-circle">
                                        <path id="Vector" d="M2.5 9C2.5 5.14364 5.64364 2 9.5 2C13.3564 2 16.5 5.14364 16.5 9C16.5 12.8564 13.3564 16 9.5 16C5.64364 16 2.5 12.8564 2.5 9ZM11.6225 12.185C11.8905 12.185 12.1623 12.0848 12.3736 11.8736C12.7863 11.4608 12.7863 10.7842 12.3736 10.3714L11.0021 9L12.3736 7.62855C12.7863 7.21579 12.7863 6.53921 12.3736 6.12645C11.9608 5.71368 11.2842 5.71368 10.8714 6.12645L9.5 7.49789L8.12855 6.12645C7.71579 5.71368 7.03921 5.71368 6.62645 6.12645C6.21368 6.53921 6.21368 7.21579 6.62645 7.62855L7.99789 9L6.62645 10.3714C6.21368 10.7842 6.21368 11.4608 6.62645 11.8736C6.83766 12.0848 7.10955 12.185 7.3775 12.185C7.64545 12.185 7.91734 12.0848 8.12855 11.8736L9.5 10.5021L10.8714 11.8736C11.0827 12.0848 11.3545 12.185 11.6225 12.185Z" fill="white" stroke="white"/>
                                        </g>
                                        </g>
                                    </svg>                                        
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex cursor-default py-4 border-t border-stroke hover:opacity-80" x-on:click="dealerAgentSidebarOpen = !dealerAgentSidebarOpen">
                    <span class="text-brand-green">Details</span>
                    <img class="ml-2" src="{{ asset('images/details-icon.svg') }}" alt="Details icon"/>
                </div>
            </div>
        </div>
    </template>
</div>   