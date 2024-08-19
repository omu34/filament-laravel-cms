<div data-aos="fade-up" data-aos-duration="1000">

    <div class="w-full mx-auto pb-8 flex flex-col gap-y-3" x-cloak x-data="tabs()">

        <div class="w-full flex flex-col items-center gap-6">
            {{-- Start of Tabs --}}
            <div class="w-full px-8 flex justify-center items-center text-left font-bold gap-6">
                <button type="button" x-on:click="filterStatus('All')" :class="{ 'border-b-2 border-brand-light-green text-brand-light-green': activeTab === 'All', 'text-brand-green border-b-2 border-transparent': activeTab !== 'All' }" class="hover:border-b-2 hover:border-brand-light-green hover:text-brand-light-green pt-2 pb-1">
                    All
                </button>
                <button type="button" x-on:click="filterStatus('Approved')" :class="{ 'border-b-2 border-brand-light-green text-brand-light-green': activeTab === 'Approved', 'text-brand-green border-b-2 border-transparent': activeTab !== 'Approved' }" class="hover:border-b-2 hover:border-brand-light-green hover:text-brand-light-green pt-2 pb-1">
                    Approved
                </button>
                <button type="button" x-on:click="filterStatus('Pending')" :class="{ 'border-b-2 border-brand-light-green text-brand-light-green': activeTab === 'Pending', 'text-brand-green border-b-2 border-transparent': activeTab !== 'Pending' }" class="hover:border-b-2 hover:border-brand-light-green hover:text-brand-light-green pt-2 pb-1">
                    Pending
                </button>
                <button type="button" x-on:click="filterStatus('Denied')" :class="{ 'border-b-2 border-brand-light-green text-brand-light-green': activeTab === 'Denied', 'text-brand-green border-b-2 border-transparent': activeTab !== 'Denied' }" class="hover:border-b-2 hover:border-brand-light-green hover:text-brand-light-green pt-2 pb-1">
                    Denied
                </button>
            </div>
            {{-- End of Tabs --}} 

            {{-- Start of Date Filter and Search --}}
            <div class="flex flex-col gap-3 w-full px-8">
                <form action="" class="flex  gap-3 flex-col w-full">
                    <div class="flex gap-2 flex-col">
                        <label for="date-filter" class="w-full">
                            Filter by date 
                        </label>
                        <input type="date" id="date-filter" name="date-filter" placeholder="Filter by date" style="all:unset; display: flex; width: 100% !important; border: 0.5px solid; height:35px; border-radius: 0.375rem; border-width: 1px; border-color: #037856;" />
                    </div>                
                    <div class="flex mt-2">
                        <input type="text" id="search" name="search" placeholder="Search" class="w-full border-[0.5px] hover:border active:border focus:border border-brand-green rounded-lg pl-4 pb-2 placeholder-brand-green">
                    </div>
                </form>
            </div>
            {{-- End of Date Filter and Search --}}
        
        <div class="bg-white flex flex-col">
            
            <div class="px-8" x-data="{ noteContentOpen: false, status: 'Approved'}">
                <div class="pb-4 w-full flex flex-col border-b border-b-brand-green">
                    <div class="w-full flex flex-col gap-y-2">
                        <div class="w-full flex gap-x-4 justify-evenly items-start cursor-default hover:opacity-80" x-on:click="noteContentOpen = !noteContentOpen">
                            <div class="w-10 flex mt-1">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40" height="40" rx="20" fill="#037856"/>
                                    <path opacity="0.4" d="M26.9925 16.8561V16.8575V23.1425C26.9925 24.4081 26.6172 25.3582 25.9839 25.9914C25.3507 26.6247 24.4006 27 23.135 27H16.8575C15.5919 27 14.642 26.6247 14.0088 25.9907C13.3755 25.3567 13 24.4047 13 23.135V16.8575C13 15.5919 13.3753 14.6418 14.0086 14.0086C14.6418 13.3753 15.5919 13 16.8575 13H23.1425C24.4082 13 25.3581 13.3753 25.9903 14.0083C26.6224 14.6412 26.996 15.5909 26.9925 16.8561Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 17.8125H17.1875C17.1744 17.8125 17.1588 17.8073 17.1445 17.793C17.1302 17.7787 17.125 17.7631 17.125 17.75C17.125 17.7369 17.1302 17.7213 17.1445 17.707C17.1588 17.6927 17.1744 17.6875 17.1875 17.6875H22.8125C22.8256 17.6875 22.8412 17.6927 22.8555 17.707C22.8698 17.7213 22.875 17.7369 22.875 17.75C22.875 17.7631 22.8698 17.7787 22.8555 17.793C22.8412 17.8073 22.8256 17.8125 22.8125 17.8125Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 22.3125H17.1875C17.1744 22.3125 17.1588 22.3073 17.1445 22.293C17.1302 22.2787 17.125 22.2631 17.125 22.25C17.125 22.2369 17.1302 22.2213 17.1445 22.207C17.1588 22.1927 17.1744 22.1875 17.1875 22.1875H22.8125C22.8256 22.1875 22.8412 22.1927 22.8555 22.207C22.8698 22.2213 22.875 22.2369 22.875 22.25C22.875 22.2631 22.8698 22.2787 22.8555 22.293C22.8412 22.3073 22.8256 22.3125 22.8125 22.3125Z" fill="white" stroke="white"/>
                                </svg>                                      
                            </div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Name:</p></div>
                                <div><p class="text-sm text-left">John Doe</p></div>
                                <div><p class="text-sm font-semibold text-left">Amount Applied:</p></div>
                                <div><p class="text-sm text-left">1,500,200</p></div>
                            </div>
                            <div class="w-6 flex justify-end mt-1">
                                <svg x-show="!noteContentOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M8.64644 10.2536L9 10.6071L9.35355 10.2536L11.6035 8.00356C11.613 7.99411 11.6277 7.98688 11.6475 7.98688C11.6673 7.98688 11.682 7.99411 11.6914 8.00356C11.7009 8.013 11.7081 8.02769 11.7081 8.0475C11.7081 8.06731 11.7009 8.08201 11.6914 8.09145L9.04394 10.7389C9.03551 10.7474 9.02855 10.7512 9.02319 10.7534C9.01737 10.7557 9.00976 10.7575 9 10.7575C8.99023 10.7575 8.98262 10.7557 8.9768 10.7534C8.97144 10.7512 8.96448 10.7474 8.95605 10.7389L6.30855 8.09145C6.2991 8.08201 6.29187 8.06731 6.29187 8.0475C6.29187 8.02769 6.2991 8.013 6.30855 8.00356C6.31799 7.99411 6.33269 7.98688 6.3525 7.98688C6.3723 7.98688 6.387 7.99411 6.39644 8.00356L8.64644 10.2536Z" fill="#037856" stroke="#037856"/>
                                </svg> 
                                <svg x-show="noteContentOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M9.35355 7.73895L9 7.3854L8.64644 7.73895L6.39644 9.98895C6.387 9.99839 6.3723 10.0056 6.3525 10.0056C6.33269 10.0056 6.31799 9.99839 6.30855 9.98895L5.955 10.3425L6.30855 9.98895C6.2991 9.97951 6.29187 9.96481 6.29187 9.945C6.29187 9.92519 6.2991 9.9105 6.30855 9.90106L8.95605 7.25356C8.96549 7.24411 8.98019 7.23688 9 7.23688C9.0198 7.23688 9.0345 7.24411 9.04394 7.25356L11.6914 9.90106C11.7009 9.9105 11.7081 9.92519 11.7081 9.945C11.7081 9.96481 11.7009 9.97951 11.6914 9.98895C11.683 9.99738 11.676 10.0012 11.6707 10.0034C11.6649 10.0057 11.6573 10.0075 11.6475 10.0075C11.6377 10.0075 11.6301 10.0057 11.6243 10.0034C11.6189 10.0012 11.612 9.99738 11.6035 9.98895L9.35355 7.73895Z" fill="#037856" stroke="#037856"/>
                                </svg>                                            
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-x-4 gap-y-2 pt-2 justify-evenly items-start cursor-default" x-show="noteContentOpen">
                        <div class="w-10"></div>
                        <div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Sales Agent:</p></div>
                                <div><p class="text-sm text-left">Mark Smith</p></div>
                                <div><p class="text-sm font-semibold text-left">Application Date:</p></div>
                                <div><p class="text-sm text-left">12/03/2024</p></div>
                                <div><p class="text-sm font-semibold text-left">Reference No.</p></div>
                                <div><p class="text-sm text-left">746757453</p></div>
                                <div><p class="text-sm font-semibold text-left">Status</p></div>
                                <div x-show="status === 'Approved'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                        <span class="text-sm text-approved-blue" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Pending'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                        <span class="text-pending-yellow" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Denied'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                        <span class="text-denied-red" x-text="status"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- Mobile sidebar --}}
                            <div x-data="{ mobileSidebarOpen: false }">
                                <div x-data="{}" x-ref="search" x-show="mobileSidebarOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex min-h-full items-start justify-end text-center">
                                        <div x-cloak @click="mobileSidebarOpen = false" x-show="mobileSidebarOpen" 
                                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:enter-start="translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:leave-start="translate-x-0"
                                        x-transition:leave-end="translate-x-full"
                                        class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                                        </div>
                            
                                        <div class="relative bg-white rounded-l-md max-w-3xl pt-6 pb-4 flex flex-col" x-data="{}" x-cloak x-show="mobileSidebarOpen"
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
                                                                <button type="button" @click="mobileSidebarOpen = false" class="hover:opacity-80">
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
                                                                <div x-show="status === 'Approved'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                                                        <span class="text-approved-blue" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Pending'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-pending-yellow" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Denied'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-denied-red" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex w-full border-t border-stroke">
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                                    <span>Name</span>
                                                                </div>
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                                    <span>John Doe</span>
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
                                            <div class="w-full mt-4 px-8 flex justify-start" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
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
                                <div class="mt-4 flex justify-center" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
                                    <button type="button" class="w-40 flex items-center justify-center px-6 py-1 text-sm rounded-lg bg-white border-brand-green hover:border-brand-light-green hover:bg-brand-light-green text-brand-dark-green border-2 shadow-md">                             
                                        Details
                                        <svg class="pl-2" width="25" height="24" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/arrow-circle-right">
                                            <g id="arrow-circle-right">
                                            <path id="Vector" opacity="0.4" d="M16.5 9C16.5 12.866 13.366 16 9.5 16C5.63401 16 2.5 12.866 2.5 9C2.5 5.13401 5.63401 2 9.5 2C13.366 2 16.5 5.13401 16.5 9Z" fill="#037856" stroke="#037856"/>
                                            <path id="Vector_2" d="M8.55501 12.21C8.41251 12.21 8.27001 12.1575 8.15751 12.045C7.94001 11.8275 7.94001 11.4675 8.15751 11.25L10.4075 9L8.15751 6.75C7.94001 6.5325 7.94001 6.1725 8.15751 5.955C8.37501 5.7375 8.73501 5.7375 8.95251 5.955L11.6 8.6025C11.8175 8.82 11.8175 9.18 11.6 9.3975L8.95251 12.045C8.84001 12.1575 8.69751 12.21 8.55501 12.21Z" fill="#FFFFFF"/>
                                            </g>
                                            </g>
                                        </svg>                      
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-6"></div>
                    </div>
                </div>
            </div>

            <div class="px-8" x-data="{ noteContentTwoOpen: false, status: 'Approved'}">
                <div class="py-4 w-full flex flex-col border-b border-b-brand-green">
                    <div class="w-full flex flex-col gap-y-2">
                        <div class="w-full flex gap-x-4 justify-evenly items-start cursor-default hover:opacity-80" x-on:click="noteContentTwoOpen = !noteContentTwoOpen">
                            <div class="w-10 flex mt-1">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40" height="40" rx="20" fill="#037856"/>
                                    <path opacity="0.4" d="M26.9925 16.8561V16.8575V23.1425C26.9925 24.4081 26.6172 25.3582 25.9839 25.9914C25.3507 26.6247 24.4006 27 23.135 27H16.8575C15.5919 27 14.642 26.6247 14.0088 25.9907C13.3755 25.3567 13 24.4047 13 23.135V16.8575C13 15.5919 13.3753 14.6418 14.0086 14.0086C14.6418 13.3753 15.5919 13 16.8575 13H23.1425C24.4082 13 25.3581 13.3753 25.9903 14.0083C26.6224 14.6412 26.996 15.5909 26.9925 16.8561Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 17.8125H17.1875C17.1744 17.8125 17.1588 17.8073 17.1445 17.793C17.1302 17.7787 17.125 17.7631 17.125 17.75C17.125 17.7369 17.1302 17.7213 17.1445 17.707C17.1588 17.6927 17.1744 17.6875 17.1875 17.6875H22.8125C22.8256 17.6875 22.8412 17.6927 22.8555 17.707C22.8698 17.7213 22.875 17.7369 22.875 17.75C22.875 17.7631 22.8698 17.7787 22.8555 17.793C22.8412 17.8073 22.8256 17.8125 22.8125 17.8125Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 22.3125H17.1875C17.1744 22.3125 17.1588 22.3073 17.1445 22.293C17.1302 22.2787 17.125 22.2631 17.125 22.25C17.125 22.2369 17.1302 22.2213 17.1445 22.207C17.1588 22.1927 17.1744 22.1875 17.1875 22.1875H22.8125C22.8256 22.1875 22.8412 22.1927 22.8555 22.207C22.8698 22.2213 22.875 22.2369 22.875 22.25C22.875 22.2631 22.8698 22.2787 22.8555 22.293C22.8412 22.3073 22.8256 22.3125 22.8125 22.3125Z" fill="white" stroke="white"/>
                                </svg>                                      
                            </div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Name:</p></div>
                                <div><p class="text-sm text-left">John Doe</p></div>
                                <div><p class="text-sm font-semibold text-left">Amount Applied:</p></div>
                                <div><p class="text-sm text-left">1,500,200</p></div>
                            </div>
                            <div class="w-6 flex justify-end mt-1">
                                <svg x-show="!noteContentTwoOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M8.64644 10.2536L9 10.6071L9.35355 10.2536L11.6035 8.00356C11.613 7.99411 11.6277 7.98688 11.6475 7.98688C11.6673 7.98688 11.682 7.99411 11.6914 8.00356C11.7009 8.013 11.7081 8.02769 11.7081 8.0475C11.7081 8.06731 11.7009 8.08201 11.6914 8.09145L9.04394 10.7389C9.03551 10.7474 9.02855 10.7512 9.02319 10.7534C9.01737 10.7557 9.00976 10.7575 9 10.7575C8.99023 10.7575 8.98262 10.7557 8.9768 10.7534C8.97144 10.7512 8.96448 10.7474 8.95605 10.7389L6.30855 8.09145C6.2991 8.08201 6.29187 8.06731 6.29187 8.0475C6.29187 8.02769 6.2991 8.013 6.30855 8.00356C6.31799 7.99411 6.33269 7.98688 6.3525 7.98688C6.3723 7.98688 6.387 7.99411 6.39644 8.00356L8.64644 10.2536Z" fill="#037856" stroke="#037856"/>
                                </svg> 
                                <svg x-show="noteContentTwoOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M9.35355 7.73895L9 7.3854L8.64644 7.73895L6.39644 9.98895C6.387 9.99839 6.3723 10.0056 6.3525 10.0056C6.33269 10.0056 6.31799 9.99839 6.30855 9.98895L5.955 10.3425L6.30855 9.98895C6.2991 9.97951 6.29187 9.96481 6.29187 9.945C6.29187 9.92519 6.2991 9.9105 6.30855 9.90106L8.95605 7.25356C8.96549 7.24411 8.98019 7.23688 9 7.23688C9.0198 7.23688 9.0345 7.24411 9.04394 7.25356L11.6914 9.90106C11.7009 9.9105 11.7081 9.92519 11.7081 9.945C11.7081 9.96481 11.7009 9.97951 11.6914 9.98895C11.683 9.99738 11.676 10.0012 11.6707 10.0034C11.6649 10.0057 11.6573 10.0075 11.6475 10.0075C11.6377 10.0075 11.6301 10.0057 11.6243 10.0034C11.6189 10.0012 11.612 9.99738 11.6035 9.98895L9.35355 7.73895Z" fill="#037856" stroke="#037856"/>
                                </svg>                                            
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-x-4 gap-y-2 pt-2 justify-evenly items-start cursor-default" x-show="noteContentTwoOpen">
                        <div class="w-10"></div>
                        <div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Sales Agent:</p></div>
                                <div><p class="text-sm text-left">Mark Smith</p></div>
                                <div><p class="text-sm font-semibold text-left">Application Date:</p></div>
                                <div><p class="text-sm text-left">12/03/2024</p></div>
                                <div><p class="text-sm font-semibold text-left">Reference No.</p></div>
                                <div><p class="text-sm text-left">746757453</p></div>
                                <div><p class="text-sm font-semibold text-left">Status</p></div>
                                <div x-show="status === 'Approved'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                        <span class="text-sm text-approved-blue" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Pending'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                        <span class="text-pending-yellow" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Denied'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                        <span class="text-denied-red" x-text="status"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- Mobile sidebar --}}
                            <div x-data="{ mobileSidebarOpen: false }">
                                <div x-data="{}" x-ref="search" x-show="mobileSidebarOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex min-h-full items-start justify-end text-center">
                                        <div x-cloak @click="mobileSidebarOpen = false" x-show="mobileSidebarOpen" 
                                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:enter-start="translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:leave-start="translate-x-0"
                                        x-transition:leave-end="translate-x-full"
                                        class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                                        </div>
                            
                                        <div class="relative bg-white rounded-l-md max-w-3xl pt-6 pb-4 flex flex-col" x-data="{}" x-cloak x-show="mobileSidebarOpen"
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
                                                                <button type="button" @click="mobileSidebarOpen = false" class="hover:opacity-80">
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
                                                                <div x-show="status === 'Approved'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                                                        <span class="text-approved-blue" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Pending'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-pending-yellow" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Denied'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-denied-red" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex w-full border-t border-stroke">
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                                    <span>Name</span>
                                                                </div>
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                                    <span>John Doe</span>
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
                                            <div class="w-full mt-4 px-8 flex justify-start" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
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
                                <div class="mt-4 flex justify-center" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
                                    <button type="button" class="w-40 flex items-center justify-center px-6 py-1 text-sm rounded-lg bg-white border-brand-green hover:border-brand-light-green hover:bg-brand-light-green text-brand-dark-green border-2 shadow-md">                             
                                        Details
                                        <svg class="pl-2" width="25" height="24" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/arrow-circle-right">
                                            <g id="arrow-circle-right">
                                            <path id="Vector" opacity="0.4" d="M16.5 9C16.5 12.866 13.366 16 9.5 16C5.63401 16 2.5 12.866 2.5 9C2.5 5.13401 5.63401 2 9.5 2C13.366 2 16.5 5.13401 16.5 9Z" fill="#037856" stroke="#037856"/>
                                            <path id="Vector_2" d="M8.55501 12.21C8.41251 12.21 8.27001 12.1575 8.15751 12.045C7.94001 11.8275 7.94001 11.4675 8.15751 11.25L10.4075 9L8.15751 6.75C7.94001 6.5325 7.94001 6.1725 8.15751 5.955C8.37501 5.7375 8.73501 5.7375 8.95251 5.955L11.6 8.6025C11.8175 8.82 11.8175 9.18 11.6 9.3975L8.95251 12.045C8.84001 12.1575 8.69751 12.21 8.55501 12.21Z" fill="#FFFFFF"/>
                                            </g>
                                            </g>
                                        </svg>                      
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-6"></div>
                    </div>
                </div>
            </div>

            <div class="px-8" x-data="{ noteContentThreeOpen: false, status: 'Pending'}">
                <div class="py-4 w-full flex flex-col border-b border-b-brand-green">
                    <div class="w-full flex flex-col gap-y-2">
                        <div class="w-full flex gap-x-4 justify-evenly items-start cursor-default hover:opacity-80" x-on:click="noteContentThreeOpen = !noteContentThreeOpen">
                            <div class="w-10 flex mt-1">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40" height="40" rx="20" fill="#037856"/>
                                    <path opacity="0.4" d="M26.9925 16.8561V16.8575V23.1425C26.9925 24.4081 26.6172 25.3582 25.9839 25.9914C25.3507 26.6247 24.4006 27 23.135 27H16.8575C15.5919 27 14.642 26.6247 14.0088 25.9907C13.3755 25.3567 13 24.4047 13 23.135V16.8575C13 15.5919 13.3753 14.6418 14.0086 14.0086C14.6418 13.3753 15.5919 13 16.8575 13H23.1425C24.4082 13 25.3581 13.3753 25.9903 14.0083C26.6224 14.6412 26.996 15.5909 26.9925 16.8561Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 17.8125H17.1875C17.1744 17.8125 17.1588 17.8073 17.1445 17.793C17.1302 17.7787 17.125 17.7631 17.125 17.75C17.125 17.7369 17.1302 17.7213 17.1445 17.707C17.1588 17.6927 17.1744 17.6875 17.1875 17.6875H22.8125C22.8256 17.6875 22.8412 17.6927 22.8555 17.707C22.8698 17.7213 22.875 17.7369 22.875 17.75C22.875 17.7631 22.8698 17.7787 22.8555 17.793C22.8412 17.8073 22.8256 17.8125 22.8125 17.8125Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 22.3125H17.1875C17.1744 22.3125 17.1588 22.3073 17.1445 22.293C17.1302 22.2787 17.125 22.2631 17.125 22.25C17.125 22.2369 17.1302 22.2213 17.1445 22.207C17.1588 22.1927 17.1744 22.1875 17.1875 22.1875H22.8125C22.8256 22.1875 22.8412 22.1927 22.8555 22.207C22.8698 22.2213 22.875 22.2369 22.875 22.25C22.875 22.2631 22.8698 22.2787 22.8555 22.293C22.8412 22.3073 22.8256 22.3125 22.8125 22.3125Z" fill="white" stroke="white"/>
                                </svg>                                      
                            </div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Name:</p></div>
                                <div><p class="text-sm text-left">John Doe</p></div>
                                <div><p class="text-sm font-semibold text-left">Amount Applied:</p></div>
                                <div><p class="text-sm text-left">1,500,200</p></div>
                            </div>
                            <div class="w-6 flex justify-end mt-1">
                                <svg x-show="!noteContentThreeOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M8.64644 10.2536L9 10.6071L9.35355 10.2536L11.6035 8.00356C11.613 7.99411 11.6277 7.98688 11.6475 7.98688C11.6673 7.98688 11.682 7.99411 11.6914 8.00356C11.7009 8.013 11.7081 8.02769 11.7081 8.0475C11.7081 8.06731 11.7009 8.08201 11.6914 8.09145L9.04394 10.7389C9.03551 10.7474 9.02855 10.7512 9.02319 10.7534C9.01737 10.7557 9.00976 10.7575 9 10.7575C8.99023 10.7575 8.98262 10.7557 8.9768 10.7534C8.97144 10.7512 8.96448 10.7474 8.95605 10.7389L6.30855 8.09145C6.2991 8.08201 6.29187 8.06731 6.29187 8.0475C6.29187 8.02769 6.2991 8.013 6.30855 8.00356C6.31799 7.99411 6.33269 7.98688 6.3525 7.98688C6.3723 7.98688 6.387 7.99411 6.39644 8.00356L8.64644 10.2536Z" fill="#037856" stroke="#037856"/>
                                </svg> 
                                <svg x-show="noteContentThreeOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M9.35355 7.73895L9 7.3854L8.64644 7.73895L6.39644 9.98895C6.387 9.99839 6.3723 10.0056 6.3525 10.0056C6.33269 10.0056 6.31799 9.99839 6.30855 9.98895L5.955 10.3425L6.30855 9.98895C6.2991 9.97951 6.29187 9.96481 6.29187 9.945C6.29187 9.92519 6.2991 9.9105 6.30855 9.90106L8.95605 7.25356C8.96549 7.24411 8.98019 7.23688 9 7.23688C9.0198 7.23688 9.0345 7.24411 9.04394 7.25356L11.6914 9.90106C11.7009 9.9105 11.7081 9.92519 11.7081 9.945C11.7081 9.96481 11.7009 9.97951 11.6914 9.98895C11.683 9.99738 11.676 10.0012 11.6707 10.0034C11.6649 10.0057 11.6573 10.0075 11.6475 10.0075C11.6377 10.0075 11.6301 10.0057 11.6243 10.0034C11.6189 10.0012 11.612 9.99738 11.6035 9.98895L9.35355 7.73895Z" fill="#037856" stroke="#037856"/>
                                </svg>                                            
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-x-4 gap-y-2 pt-2 justify-evenly items-start cursor-default" x-show="noteContentThreeOpen">
                        <div class="w-10"></div>
                        <div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Sales Agent:</p></div>
                                <div><p class="text-sm text-left">Mark Smith</p></div>
                                <div><p class="text-sm font-semibold text-left">Application Date:</p></div>
                                <div><p class="text-sm text-left">12/03/2024</p></div>
                                <div><p class="text-sm font-semibold text-left">Reference No.</p></div>
                                <div><p class="text-sm text-left">746757453</p></div>
                                <div><p class="text-sm font-semibold text-left">Status</p></div>
                                <div x-show="status === 'Approved'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                        <span class="text-sm text-approved-blue" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Pending'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                        <span class="text-pending-yellow" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Denied'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                        <span class="text-denied-red" x-text="status"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- Mobile sidebar --}}
                            <div x-data="{ mobileSidebarOpen: false }">
                                <div x-data="{}" x-ref="search" x-show="mobileSidebarOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex min-h-full items-start justify-end text-center">
                                        <div x-cloak @click="mobileSidebarOpen = false" x-show="mobileSidebarOpen" 
                                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:enter-start="translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:leave-start="translate-x-0"
                                        x-transition:leave-end="translate-x-full"
                                        class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                                        </div>
                            
                                        <div class="relative bg-white rounded-l-md max-w-3xl pt-6 pb-4 flex flex-col" x-data="{}" x-cloak x-show="mobileSidebarOpen"
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
                                                                <button type="button" @click="mobileSidebarOpen = false" class="hover:opacity-80">
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
                                                                <div x-show="status === 'Approved'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                                                        <span class="text-approved-blue" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Pending'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-pending-yellow" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Denied'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-denied-red" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex w-full border-t border-stroke">
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                                    <span>Name</span>
                                                                </div>
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                                    <span>John Doe</span>
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
                                            <div class="w-full mt-4 px-8 flex justify-start" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
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
                                <div class="mt-4 flex justify-center" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
                                    <button type="button" class="w-40 flex items-center justify-center px-6 py-1 text-sm rounded-lg bg-white border-brand-green hover:border-brand-light-green hover:bg-brand-light-green text-brand-dark-green border-2 shadow-md">                             
                                        Details
                                        <svg class="pl-2" width="25" height="24" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/arrow-circle-right">
                                            <g id="arrow-circle-right">
                                            <path id="Vector" opacity="0.4" d="M16.5 9C16.5 12.866 13.366 16 9.5 16C5.63401 16 2.5 12.866 2.5 9C2.5 5.13401 5.63401 2 9.5 2C13.366 2 16.5 5.13401 16.5 9Z" fill="#037856" stroke="#037856"/>
                                            <path id="Vector_2" d="M8.55501 12.21C8.41251 12.21 8.27001 12.1575 8.15751 12.045C7.94001 11.8275 7.94001 11.4675 8.15751 11.25L10.4075 9L8.15751 6.75C7.94001 6.5325 7.94001 6.1725 8.15751 5.955C8.37501 5.7375 8.73501 5.7375 8.95251 5.955L11.6 8.6025C11.8175 8.82 11.8175 9.18 11.6 9.3975L8.95251 12.045C8.84001 12.1575 8.69751 12.21 8.55501 12.21Z" fill="#FFFFFF"/>
                                            </g>
                                            </g>
                                        </svg>                      
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-6"></div>
                    </div>
                </div>
            </div>

            <div class="px-8" x-data="{ noteContentFourOpen: false, status: 'Pending'}">
                <div class="py-4 w-full flex flex-col border-b border-b-brand-green">
                    <div class="w-full flex flex-col gap-y-2">
                        <div class="w-full flex gap-x-4 justify-evenly items-start cursor-default hover:opacity-80" x-on:click="noteContentFourOpen = !noteContentFourOpen">
                            <div class="w-10 flex mt-1">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40" height="40" rx="20" fill="#037856"/>
                                    <path opacity="0.4" d="M26.9925 16.8561V16.8575V23.1425C26.9925 24.4081 26.6172 25.3582 25.9839 25.9914C25.3507 26.6247 24.4006 27 23.135 27H16.8575C15.5919 27 14.642 26.6247 14.0088 25.9907C13.3755 25.3567 13 24.4047 13 23.135V16.8575C13 15.5919 13.3753 14.6418 14.0086 14.0086C14.6418 13.3753 15.5919 13 16.8575 13H23.1425C24.4082 13 25.3581 13.3753 25.9903 14.0083C26.6224 14.6412 26.996 15.5909 26.9925 16.8561Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 17.8125H17.1875C17.1744 17.8125 17.1588 17.8073 17.1445 17.793C17.1302 17.7787 17.125 17.7631 17.125 17.75C17.125 17.7369 17.1302 17.7213 17.1445 17.707C17.1588 17.6927 17.1744 17.6875 17.1875 17.6875H22.8125C22.8256 17.6875 22.8412 17.6927 22.8555 17.707C22.8698 17.7213 22.875 17.7369 22.875 17.75C22.875 17.7631 22.8698 17.7787 22.8555 17.793C22.8412 17.8073 22.8256 17.8125 22.8125 17.8125Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 22.3125H17.1875C17.1744 22.3125 17.1588 22.3073 17.1445 22.293C17.1302 22.2787 17.125 22.2631 17.125 22.25C17.125 22.2369 17.1302 22.2213 17.1445 22.207C17.1588 22.1927 17.1744 22.1875 17.1875 22.1875H22.8125C22.8256 22.1875 22.8412 22.1927 22.8555 22.207C22.8698 22.2213 22.875 22.2369 22.875 22.25C22.875 22.2631 22.8698 22.2787 22.8555 22.293C22.8412 22.3073 22.8256 22.3125 22.8125 22.3125Z" fill="white" stroke="white"/>
                                </svg>                                      
                            </div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Name:</p></div>
                                <div><p class="text-sm text-left">John Doe</p></div>
                                <div><p class="text-sm font-semibold text-left">Amount Applied:</p></div>
                                <div><p class="text-sm text-left">1,500,200</p></div>
                            </div>
                            <div class="w-6 flex justify-end mt-1">
                                <svg x-show="!noteContentFourOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M8.64644 10.2536L9 10.6071L9.35355 10.2536L11.6035 8.00356C11.613 7.99411 11.6277 7.98688 11.6475 7.98688C11.6673 7.98688 11.682 7.99411 11.6914 8.00356C11.7009 8.013 11.7081 8.02769 11.7081 8.0475C11.7081 8.06731 11.7009 8.08201 11.6914 8.09145L9.04394 10.7389C9.03551 10.7474 9.02855 10.7512 9.02319 10.7534C9.01737 10.7557 9.00976 10.7575 9 10.7575C8.99023 10.7575 8.98262 10.7557 8.9768 10.7534C8.97144 10.7512 8.96448 10.7474 8.95605 10.7389L6.30855 8.09145C6.2991 8.08201 6.29187 8.06731 6.29187 8.0475C6.29187 8.02769 6.2991 8.013 6.30855 8.00356C6.31799 7.99411 6.33269 7.98688 6.3525 7.98688C6.3723 7.98688 6.387 7.99411 6.39644 8.00356L8.64644 10.2536Z" fill="#037856" stroke="#037856"/>
                                </svg> 
                                <svg x-show="noteContentFourOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M9.35355 7.73895L9 7.3854L8.64644 7.73895L6.39644 9.98895C6.387 9.99839 6.3723 10.0056 6.3525 10.0056C6.33269 10.0056 6.31799 9.99839 6.30855 9.98895L5.955 10.3425L6.30855 9.98895C6.2991 9.97951 6.29187 9.96481 6.29187 9.945C6.29187 9.92519 6.2991 9.9105 6.30855 9.90106L8.95605 7.25356C8.96549 7.24411 8.98019 7.23688 9 7.23688C9.0198 7.23688 9.0345 7.24411 9.04394 7.25356L11.6914 9.90106C11.7009 9.9105 11.7081 9.92519 11.7081 9.945C11.7081 9.96481 11.7009 9.97951 11.6914 9.98895C11.683 9.99738 11.676 10.0012 11.6707 10.0034C11.6649 10.0057 11.6573 10.0075 11.6475 10.0075C11.6377 10.0075 11.6301 10.0057 11.6243 10.0034C11.6189 10.0012 11.612 9.99738 11.6035 9.98895L9.35355 7.73895Z" fill="#037856" stroke="#037856"/>
                                </svg>                                            
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-x-4 gap-y-2 pt-2 justify-evenly items-start cursor-default" x-show="noteContentFourOpen">
                        <div class="w-10"></div>
                        <div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Sales Agent:</p></div>
                                <div><p class="text-sm text-left">Mark Smith</p></div>
                                <div><p class="text-sm font-semibold text-left">Application Date:</p></div>
                                <div><p class="text-sm text-left">12/03/2024</p></div>
                                <div><p class="text-sm font-semibold text-left">Reference No.</p></div>
                                <div><p class="text-sm text-left">746757453</p></div>
                                <div><p class="text-sm font-semibold text-left">Status</p></div>
                                <div x-show="status === 'Approved'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                        <span class="text-sm text-approved-blue" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Pending'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                        <span class="text-pending-yellow" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Denied'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                        <span class="text-denied-red" x-text="status"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- Mobile sidebar --}}
                            <div x-data="{ mobileSidebarOpen: false }">
                                <div x-data="{}" x-ref="search" x-show="mobileSidebarOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex min-h-full items-start justify-end text-center">
                                        <div x-cloak @click="mobileSidebarOpen = false" x-show="mobileSidebarOpen" 
                                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:enter-start="translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:leave-start="translate-x-0"
                                        x-transition:leave-end="translate-x-full"
                                        class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                                        </div>
                            
                                        <div class="relative bg-white rounded-l-md max-w-3xl pt-6 pb-4 flex flex-col" x-data="{}" x-cloak x-show="mobileSidebarOpen"
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
                                                                <button type="button" @click="mobileSidebarOpen = false" class="hover:opacity-80">
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
                                                                <div x-show="status === 'Approved'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                                                        <span class="text-approved-blue" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Pending'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-pending-yellow" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Denied'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-denied-red" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex w-full border-t border-stroke">
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                                    <span>Name</span>
                                                                </div>
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                                    <span>John Doe</span>
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
                                            <div class="w-full mt-4 px-8 flex justify-start" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
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
                                <div class="mt-4 flex justify-center" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
                                    <button type="button" class="w-40 flex items-center justify-center px-6 py-1 text-sm rounded-lg bg-white border-brand-green hover:border-brand-light-green hover:bg-brand-light-green text-brand-dark-green border-2 shadow-md">                             
                                        Details
                                        <svg class="pl-2" width="25" height="24" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/arrow-circle-right">
                                            <g id="arrow-circle-right">
                                            <path id="Vector" opacity="0.4" d="M16.5 9C16.5 12.866 13.366 16 9.5 16C5.63401 16 2.5 12.866 2.5 9C2.5 5.13401 5.63401 2 9.5 2C13.366 2 16.5 5.13401 16.5 9Z" fill="#037856" stroke="#037856"/>
                                            <path id="Vector_2" d="M8.55501 12.21C8.41251 12.21 8.27001 12.1575 8.15751 12.045C7.94001 11.8275 7.94001 11.4675 8.15751 11.25L10.4075 9L8.15751 6.75C7.94001 6.5325 7.94001 6.1725 8.15751 5.955C8.37501 5.7375 8.73501 5.7375 8.95251 5.955L11.6 8.6025C11.8175 8.82 11.8175 9.18 11.6 9.3975L8.95251 12.045C8.84001 12.1575 8.69751 12.21 8.55501 12.21Z" fill="#FFFFFF"/>
                                            </g>
                                            </g>
                                        </svg>                      
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-6"></div>
                    </div>
                </div>
            </div>

            <div class="px-8" x-data="{ noteContentFiveOpen: false, status: 'Denied'}">
                <div class="py-4 w-full flex flex-col border-b border-b-brand-green">
                    <div class="w-full flex flex-col gap-y-2">
                        <div class="w-full flex gap-x-4 justify-evenly items-start cursor-default hover:opacity-80" x-on:click="noteContentFiveOpen = !noteContentFiveOpen">
                            <div class="w-10 flex mt-1">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40" height="40" rx="20" fill="#037856"/>
                                    <path opacity="0.4" d="M26.9925 16.8561V16.8575V23.1425C26.9925 24.4081 26.6172 25.3582 25.9839 25.9914C25.3507 26.6247 24.4006 27 23.135 27H16.8575C15.5919 27 14.642 26.6247 14.0088 25.9907C13.3755 25.3567 13 24.4047 13 23.135V16.8575C13 15.5919 13.3753 14.6418 14.0086 14.0086C14.6418 13.3753 15.5919 13 16.8575 13H23.1425C24.4082 13 25.3581 13.3753 25.9903 14.0083C26.6224 14.6412 26.996 15.5909 26.9925 16.8561Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 17.8125H17.1875C17.1744 17.8125 17.1588 17.8073 17.1445 17.793C17.1302 17.7787 17.125 17.7631 17.125 17.75C17.125 17.7369 17.1302 17.7213 17.1445 17.707C17.1588 17.6927 17.1744 17.6875 17.1875 17.6875H22.8125C22.8256 17.6875 22.8412 17.6927 22.8555 17.707C22.8698 17.7213 22.875 17.7369 22.875 17.75C22.875 17.7631 22.8698 17.7787 22.8555 17.793C22.8412 17.8073 22.8256 17.8125 22.8125 17.8125Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 22.3125H17.1875C17.1744 22.3125 17.1588 22.3073 17.1445 22.293C17.1302 22.2787 17.125 22.2631 17.125 22.25C17.125 22.2369 17.1302 22.2213 17.1445 22.207C17.1588 22.1927 17.1744 22.1875 17.1875 22.1875H22.8125C22.8256 22.1875 22.8412 22.1927 22.8555 22.207C22.8698 22.2213 22.875 22.2369 22.875 22.25C22.875 22.2631 22.8698 22.2787 22.8555 22.293C22.8412 22.3073 22.8256 22.3125 22.8125 22.3125Z" fill="white" stroke="white"/>
                                </svg>                                      
                            </div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Name:</p></div>
                                <div><p class="text-sm text-left">John Doe</p></div>
                                <div><p class="text-sm font-semibold text-left">Amount Applied:</p></div>
                                <div><p class="text-sm text-left">1,500,200</p></div>
                            </div>
                            <div class="w-6 flex justify-end mt-1">
                                <svg x-show="!noteContentFiveOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M8.64644 10.2536L9 10.6071L9.35355 10.2536L11.6035 8.00356C11.613 7.99411 11.6277 7.98688 11.6475 7.98688C11.6673 7.98688 11.682 7.99411 11.6914 8.00356C11.7009 8.013 11.7081 8.02769 11.7081 8.0475C11.7081 8.06731 11.7009 8.08201 11.6914 8.09145L9.04394 10.7389C9.03551 10.7474 9.02855 10.7512 9.02319 10.7534C9.01737 10.7557 9.00976 10.7575 9 10.7575C8.99023 10.7575 8.98262 10.7557 8.9768 10.7534C8.97144 10.7512 8.96448 10.7474 8.95605 10.7389L6.30855 8.09145C6.2991 8.08201 6.29187 8.06731 6.29187 8.0475C6.29187 8.02769 6.2991 8.013 6.30855 8.00356C6.31799 7.99411 6.33269 7.98688 6.3525 7.98688C6.3723 7.98688 6.387 7.99411 6.39644 8.00356L8.64644 10.2536Z" fill="#037856" stroke="#037856"/>
                                </svg> 
                                <svg x-show="noteContentFiveOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M9.35355 7.73895L9 7.3854L8.64644 7.73895L6.39644 9.98895C6.387 9.99839 6.3723 10.0056 6.3525 10.0056C6.33269 10.0056 6.31799 9.99839 6.30855 9.98895L5.955 10.3425L6.30855 9.98895C6.2991 9.97951 6.29187 9.96481 6.29187 9.945C6.29187 9.92519 6.2991 9.9105 6.30855 9.90106L8.95605 7.25356C8.96549 7.24411 8.98019 7.23688 9 7.23688C9.0198 7.23688 9.0345 7.24411 9.04394 7.25356L11.6914 9.90106C11.7009 9.9105 11.7081 9.92519 11.7081 9.945C11.7081 9.96481 11.7009 9.97951 11.6914 9.98895C11.683 9.99738 11.676 10.0012 11.6707 10.0034C11.6649 10.0057 11.6573 10.0075 11.6475 10.0075C11.6377 10.0075 11.6301 10.0057 11.6243 10.0034C11.6189 10.0012 11.612 9.99738 11.6035 9.98895L9.35355 7.73895Z" fill="#037856" stroke="#037856"/>
                                </svg>                                            
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-x-4 gap-y-2 pt-2 justify-evenly items-start cursor-default" x-show="noteContentFiveOpen">
                        <div class="w-10"></div>
                        <div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Sales Agent:</p></div>
                                <div><p class="text-sm text-left">Mark Smith</p></div>
                                <div><p class="text-sm font-semibold text-left">Application Date:</p></div>
                                <div><p class="text-sm text-left">12/03/2024</p></div>
                                <div><p class="text-sm font-semibold text-left">Reference No.</p></div>
                                <div><p class="text-sm text-left">746757453</p></div>
                                <div><p class="text-sm font-semibold text-left">Status</p></div>
                                <div x-show="status === 'Approved'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                        <span class="text-sm text-approved-blue" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Pending'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                        <span class="text-pending-yellow" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Denied'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                        <span class="text-denied-red" x-text="status"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- Mobile sidebar --}}
                            <div x-data="{ mobileSidebarOpen: false }">
                                <div x-data="{}" x-ref="search" x-show="mobileSidebarOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex min-h-full items-start justify-end text-center">
                                        <div x-cloak @click="mobileSidebarOpen = false" x-show="mobileSidebarOpen" 
                                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:enter-start="translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:leave-start="translate-x-0"
                                        x-transition:leave-end="translate-x-full"
                                        class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                                        </div>
                            
                                        <div class="relative bg-white rounded-l-md max-w-3xl pt-6 pb-4 flex flex-col" x-data="{}" x-cloak x-show="mobileSidebarOpen"
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
                                                                <button type="button" @click="mobileSidebarOpen = false" class="hover:opacity-80">
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
                                                                <div x-show="status === 'Approved'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                                                        <span class="text-approved-blue" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Pending'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-pending-yellow" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Denied'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-denied-red" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex w-full border-t border-stroke">
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                                    <span>Name</span>
                                                                </div>
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                                    <span>John Doe</span>
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
                                            <div class="w-full mt-4 px-8 flex justify-start" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
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
                                <div class="mt-4 flex justify-center" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
                                    <button type="button" class="w-40 flex items-center justify-center px-6 py-1 text-sm rounded-lg bg-white border-brand-green hover:border-brand-light-green hover:bg-brand-light-green text-brand-dark-green border-2 shadow-md">                             
                                        Details
                                        <svg class="pl-2" width="25" height="24" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/arrow-circle-right">
                                            <g id="arrow-circle-right">
                                            <path id="Vector" opacity="0.4" d="M16.5 9C16.5 12.866 13.366 16 9.5 16C5.63401 16 2.5 12.866 2.5 9C2.5 5.13401 5.63401 2 9.5 2C13.366 2 16.5 5.13401 16.5 9Z" fill="#037856" stroke="#037856"/>
                                            <path id="Vector_2" d="M8.55501 12.21C8.41251 12.21 8.27001 12.1575 8.15751 12.045C7.94001 11.8275 7.94001 11.4675 8.15751 11.25L10.4075 9L8.15751 6.75C7.94001 6.5325 7.94001 6.1725 8.15751 5.955C8.37501 5.7375 8.73501 5.7375 8.95251 5.955L11.6 8.6025C11.8175 8.82 11.8175 9.18 11.6 9.3975L8.95251 12.045C8.84001 12.1575 8.69751 12.21 8.55501 12.21Z" fill="#FFFFFF"/>
                                            </g>
                                            </g>
                                        </svg>                      
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-6"></div>
                    </div>
                </div>
            </div>

            <div class="px-8" x-data="{ noteContentSixOpen: false, status: 'Denied'}">
                <div class="py-4 w-full flex flex-col border-b border-b-brand-green">
                    <div class="w-full flex flex-col gap-y-2">
                        <div class="w-full flex gap-x-4 justify-evenly items-start cursor-default hover:opacity-80" x-on:click="noteContentSixOpen = !noteContentSixOpen">
                            <div class="w-10 flex mt-1">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40" height="40" rx="20" fill="#037856"/>
                                    <path opacity="0.4" d="M26.9925 16.8561V16.8575V23.1425C26.9925 24.4081 26.6172 25.3582 25.9839 25.9914C25.3507 26.6247 24.4006 27 23.135 27H16.8575C15.5919 27 14.642 26.6247 14.0088 25.9907C13.3755 25.3567 13 24.4047 13 23.135V16.8575C13 15.5919 13.3753 14.6418 14.0086 14.0086C14.6418 13.3753 15.5919 13 16.8575 13H23.1425C24.4082 13 25.3581 13.3753 25.9903 14.0083C26.6224 14.6412 26.996 15.5909 26.9925 16.8561Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 17.8125H17.1875C17.1744 17.8125 17.1588 17.8073 17.1445 17.793C17.1302 17.7787 17.125 17.7631 17.125 17.75C17.125 17.7369 17.1302 17.7213 17.1445 17.707C17.1588 17.6927 17.1744 17.6875 17.1875 17.6875H22.8125C22.8256 17.6875 22.8412 17.6927 22.8555 17.707C22.8698 17.7213 22.875 17.7369 22.875 17.75C22.875 17.7631 22.8698 17.7787 22.8555 17.793C22.8412 17.8073 22.8256 17.8125 22.8125 17.8125Z" fill="white" stroke="white"/>
                                    <path d="M22.8125 22.3125H17.1875C17.1744 22.3125 17.1588 22.3073 17.1445 22.293C17.1302 22.2787 17.125 22.2631 17.125 22.25C17.125 22.2369 17.1302 22.2213 17.1445 22.207C17.1588 22.1927 17.1744 22.1875 17.1875 22.1875H22.8125C22.8256 22.1875 22.8412 22.1927 22.8555 22.207C22.8698 22.2213 22.875 22.2369 22.875 22.25C22.875 22.2631 22.8698 22.2787 22.8555 22.293C22.8412 22.3073 22.8256 22.3125 22.8125 22.3125Z" fill="white" stroke="white"/>
                                </svg>                                      
                            </div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Name:</p></div>
                                <div><p class="text-sm text-left">John Doe</p></div>
                                <div><p class="text-sm font-semibold text-left">Amount Applied:</p></div>
                                <div><p class="text-sm text-left">1,500,200</p></div>
                            </div>
                            <div class="w-6 flex justify-end mt-1">
                                <svg x-show="!noteContentSixOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M8.64644 10.2536L9 10.6071L9.35355 10.2536L11.6035 8.00356C11.613 7.99411 11.6277 7.98688 11.6475 7.98688C11.6673 7.98688 11.682 7.99411 11.6914 8.00356C11.7009 8.013 11.7081 8.02769 11.7081 8.0475C11.7081 8.06731 11.7009 8.08201 11.6914 8.09145L9.04394 10.7389C9.03551 10.7474 9.02855 10.7512 9.02319 10.7534C9.01737 10.7557 9.00976 10.7575 9 10.7575C8.99023 10.7575 8.98262 10.7557 8.9768 10.7534C8.97144 10.7512 8.96448 10.7474 8.95605 10.7389L6.30855 8.09145C6.2991 8.08201 6.29187 8.06731 6.29187 8.0475C6.29187 8.02769 6.2991 8.013 6.30855 8.00356C6.31799 7.99411 6.33269 7.98688 6.3525 7.98688C6.3723 7.98688 6.387 7.99411 6.39644 8.00356L8.64644 10.2536Z" fill="#037856" stroke="#037856"/>
                                </svg> 
                                <svg x-show="noteContentSixOpen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" fill="#037856" stroke="#037856"/>
                                    <path d="M9.35355 7.73895L9 7.3854L8.64644 7.73895L6.39644 9.98895C6.387 9.99839 6.3723 10.0056 6.3525 10.0056C6.33269 10.0056 6.31799 9.99839 6.30855 9.98895L5.955 10.3425L6.30855 9.98895C6.2991 9.97951 6.29187 9.96481 6.29187 9.945C6.29187 9.92519 6.2991 9.9105 6.30855 9.90106L8.95605 7.25356C8.96549 7.24411 8.98019 7.23688 9 7.23688C9.0198 7.23688 9.0345 7.24411 9.04394 7.25356L11.6914 9.90106C11.7009 9.9105 11.7081 9.92519 11.7081 9.945C11.7081 9.96481 11.7009 9.97951 11.6914 9.98895C11.683 9.99738 11.676 10.0012 11.6707 10.0034C11.6649 10.0057 11.6573 10.0075 11.6475 10.0075C11.6377 10.0075 11.6301 10.0057 11.6243 10.0034C11.6189 10.0012 11.612 9.99738 11.6035 9.98895L9.35355 7.73895Z" fill="#037856" stroke="#037856"/>
                                </svg>                                            
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-x-4 gap-y-2 pt-2 justify-evenly items-start cursor-default" x-show="noteContentSixOpen">
                        <div class="w-10"></div>
                        <div>
                            <div class="w-56 grid gap-x-4 gap-y-2 grid-cols-2">
                                <div><p class="text-sm font-semibold text-left">Sales Agent:</p></div>
                                <div><p class="text-sm text-left">Mark Smith</p></div>
                                <div><p class="text-sm font-semibold text-left">Application Date:</p></div>
                                <div><p class="text-sm text-left">12/03/2024</p></div>
                                <div><p class="text-sm font-semibold text-left">Reference No.</p></div>
                                <div><p class="text-sm text-left">746757453</p></div>
                                <div><p class="text-sm font-semibold text-left">Status</p></div>
                                <div x-show="status === 'Approved'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                        <span class="text-sm text-approved-blue" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Pending'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                        <span class="text-pending-yellow" x-text="status"></span>
                                    </div>
                                </div>
                                <div x-show="status === 'Denied'">
                                    <div class="flex">
                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                        <span class="text-denied-red" x-text="status"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- Mobile sidebar --}}
                            <div x-data="{ mobileSidebarOpen: false }">
                                <div x-data="{}" x-ref="search" x-show="mobileSidebarOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex min-h-full items-start justify-end text-center">
                                        <div x-cloak @click="mobileSidebarOpen = false" x-show="mobileSidebarOpen" 
                                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:enter-start="translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:leave-start="translate-x-0"
                                        x-transition:leave-end="translate-x-full"
                                        class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                                        </div>
                            
                                        <div class="relative bg-white rounded-l-md max-w-3xl pt-6 pb-4 flex flex-col" x-data="{}" x-cloak x-show="mobileSidebarOpen"
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
                                                                <button type="button" @click="mobileSidebarOpen = false" class="hover:opacity-80">
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
                                                                <div x-show="status === 'Approved'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                                                        <span class="text-approved-blue" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Pending'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/yellow-pending-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-pending-yellow" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                                <div x-show="status === 'Denied'">
                                                                    <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                                                        <img class="mr-2 w-fit" src="{{ asset('images/red-denied-icon.svg') }}" alt="Status icon">
                                                                        <span class="text-denied-red" x-text="status"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex w-full border-t border-stroke">
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                                                    <span>Name</span>
                                                                </div>
                                                                <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                                                    <span>John Doe</span>
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
                                            <div class="w-full mt-4 px-8 flex justify-start" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
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
                                <div class="mt-4 flex justify-center" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
                                    <button type="button" class="w-40 flex items-center justify-center px-6 py-1 text-sm rounded-lg bg-white border-brand-green hover:border-brand-light-green hover:bg-brand-light-green text-brand-dark-green border-2 shadow-md">                             
                                        Details
                                        <svg class="pl-2" width="25" height="24" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/bulk/arrow-circle-right">
                                            <g id="arrow-circle-right">
                                            <path id="Vector" opacity="0.4" d="M16.5 9C16.5 12.866 13.366 16 9.5 16C5.63401 16 2.5 12.866 2.5 9C2.5 5.13401 5.63401 2 9.5 2C13.366 2 16.5 5.13401 16.5 9Z" fill="#037856" stroke="#037856"/>
                                            <path id="Vector_2" d="M8.55501 12.21C8.41251 12.21 8.27001 12.1575 8.15751 12.045C7.94001 11.8275 7.94001 11.4675 8.15751 11.25L10.4075 9L8.15751 6.75C7.94001 6.5325 7.94001 6.1725 8.15751 5.955C8.37501 5.7375 8.73501 5.7375 8.95251 5.955L11.6 8.6025C11.8175 8.82 11.8175 9.18 11.6 9.3975L8.95251 12.045C8.84001 12.1575 8.69751 12.21 8.55501 12.21Z" fill="#FFFFFF"/>
                                            </g>
                                            </g>
                                        </svg>                      
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-6"></div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8">
                <nav role="navigation" aria-label="Pagination Navigation" class="pagination flex justify-center">
                    {{-- Page Links --}}
                    <div>
                        <button type="button" type="button" class="relative inline-flex items-center px-8 py-3 text-sm font-medium text-white bg-brand-green leading-5 border-2 border-brand-tlg-ten hover:bg-brand-tlg-ten hover:border-x-white hover:text-brand-green transition ease-in-out duration-150">
                            1
                        </button>
                    </div>
                    <div>
                        <button type="button" type="button" class="relative inline-flex items-center px-8 py-3 text-sm font-medium leading-5 border-r-0 border-2 border-brand-tlg-ten bg-brand-tlg-ten text-brand-green hover:bg-brand-green hover:border-x-white hover:text-white transition ease-in-out duration-150">
                            2
                        </button>
                    </div>
                    <div>
                        <button type="button" type="button" class="relative inline-flex items-center px-8 py-3 text-sm font-medium leading-5 border-2 border-brand-tlg-ten bg-brand-tlg-ten text-brand-green hover:bg-brand-green hover:border-x-white hover:text-white transition ease-in-out duration-150">
                            3
                        </button>
                    </div>
                    <div>
                        <button type="button" type="button" class="relative inline-flex items-center px-8 py-3 text-sm font-medium leading-5 bg-brand-tlg-ten border-y-2 border-y-brand-tlg-ten text-brand-green hover:bg-brand-green hover:text-white transition ease-in-out duration-150">
                            NEXT >
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    {{-- Mobile sidebar --}}
    <div x-data="{ mobileSidebarOpen: false }">
        <div x-data="{}" x-ref="search" x-show="mobileSidebarOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex min-h-full items-start justify-end text-center">
                <div x-cloak @click="mobileSidebarOpen = false" x-show="mobileSidebarOpen" 
                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                </div>
    
                <div class="relative bg-white rounded-l-md max-w-3xl pt-6 pb-4 flex flex-col" x-data="{}" x-cloak x-show="mobileSidebarOpen"
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
                                        <button type="button" @click="mobileSidebarOpen = false" class="hover:opacity-80">
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
                                        <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8 border-t border-stroke">
                                            <img class="mr-2 w-fit" src="{{ asset('images/blue-approved-icon.svg') }}" alt="Status icon" />
                                            <span class="text-approved-blue" x-text="status"></span>
                                        </div>
                                    </div>
                                    <div class="flex w-full border-t border-stroke">
                                        <div class="w-1/2 sm:max-w-60 md:max-w-sm flex py-4 pl-8 pr-4 sm:pr-6 md:pr-8 text-left font-bold">
                                            <span>Name</span>
                                        </div>
                                        <div class="w-1/2 sm:max-w-60 md:max-w-sm flex justify-start py-4 pl-4 sm:pl-6 md:pl-8 pr-8">
                                            <span>John Doe</span>
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
                    <div class="w-full mt-4 px-8 flex justify-start" x-on:click="mobileSidebarOpen = !mobileSidebarOpen">
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
    </div>

</div>