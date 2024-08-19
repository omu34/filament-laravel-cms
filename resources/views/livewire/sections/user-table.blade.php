<div data-aos="fade-up" data-aos-duration="1000">

    <div class="mx-auto pb-12 max-w-6xl flex flex-col gap-y-6" x-cloak x-data="tabs()">

        <div class="w-full flex flex-col justify-start items-start gap-y-6 px-8 sm:px-4 xl:px-0">
            <h3 class="text-brand-green">Loan Applications</h3>
            <p class="text-basic-black">
                Deserunt anim magna in non. Eu voluptate in et commodo sunt est culpa veniam do dolor pariatur. Non ad anim culpa id mollit sunt ea eiusmod laborum. Exercitation aliqua aliquip occaecat labore sint non pariatur veniam sunt. Laborum laboris anim non aliquip exercitation anim ex velit.
            </p>
        </div>

        <div class="flex justify-between items-center gap-6 sm:px-4 xl:px-0">
            {{-- Start of Tabs --}}
            <div class="flex justify-start items-center text-left font-bold gap-6">
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
            <div class="flex gap-6">
                <div class="flex gap-2">
                    <input type="date" id="date-filter" name="date-filter" class="border-[0.5px] hover:border active:border focus:border border-brand-green rounded-lg px-4 placeholder-brand-green">
                </div>                
                <div class="flex gap-2 relative">
                    <input type="text" id="search" name="search" placeholder="Search" class="border-[0.5px] hover:border active:border focus:border border-brand-green rounded-lg pl-4 pb-2 placeholder-brand-green">
                    <svg class="absolute top-2.5 bottom-2 right-4 text-brand-green" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="vuesax/bulk/search-normal">
                            <g id="search-normal">
                                <path id="Vector" opacity="0.4" d="M20.5 11.5C20.5 16.4706 16.4706 20.5 11.5 20.5C6.52944 20.5 2.5 16.4706 2.5 11.5C2.5 6.52944 6.52944 2.5 11.5 2.5C16.4706 2.5 20.5 6.52944 20.5 11.5Z" fill="#037856" stroke="#037856"/>
                                <path id="Vector_2" d="M21.2996 21.5C21.2452 21.5 21.1945 21.4778 21.1631 21.4464L19.3031 19.5864C19.2328 19.5161 19.223 19.3903 19.3062 19.3005C19.3774 19.2327 19.5016 19.2246 19.5901 19.3076L21.446 21.1635C21.5147 21.2322 21.5256 21.3537 21.4488 21.4429C21.4016 21.4823 21.3471 21.5 21.2996 21.5Z" fill="#037856" stroke="#037856"/>
                            </g>
                        </g>
                    </svg>                        
                </div>
                {{-- <button type="button" id="date-picker" class="mt-2">Select a date</button>
                <input type="hidden" id="selected-date"> --}}
            </div>
            {{-- End of Date Filter and Search --}}

        </div>
        
        <div class="bg-white sm:px-4 xl:px-0">
            <div>
                <div class="grid grid-cols-7">
                    <div class="py-4"><span class="text-left font-bold">Reference No.</span></div>
                    <div class="py-4"><span class="text-left font-bold">Application Date</span></div>
                    <div class="py-4"><span class="text-left font-bold">Amount Applied (Ksh)</span></div>
                    <div class="py-4"><span class="text-left font-bold">Dealer</span></div>
                    <div class="py-4"><span class="text-left font-bold">Sales Agent</span></div>
                    <div class="py-4"><span class="text-left font-bold">Status</span></div>
                    <div class="py-4"><span class="text-left font-bold"></span></div>
                </div>
            </div>
            
            {{-- User table and details modal --}}
            <livewire:sections.user-sidebar-details/>

            <div class="mt-6">
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

<script>
    function tabs() {
        return {
            rows: [
                { 
                    ref: 746757453,
                    app_date: '12/03/2024', 
                    amt_applied: 1500000,
                    dealer: 'Automotors Ltd',
                    sales_agent: 'Mark Smith',
                    status: 'Approved',
                },
                { 
                    ref: 746757453,
                    app_date: '12/03/2024', 
                    amt_applied: 1500000,
                    dealer: 'Automotors Ltd',
                    sales_agent: 'Mark Smith',
                    status: 'Approved',
                },
                { 
                    ref: 746757453,
                    app_date: '12/03/2024', 
                    amt_applied: 1500000,
                    dealer: 'Automotors Ltd',
                    sales_agent: 'Mark Smith',
                    status: 'Pending',
                },
                { 
                    ref: 746757453,
                    app_date: '12/03/2024', 
                    amt_applied: 1500000,
                    dealer: 'Automotors Ltd',
                    sales_agent: 'Mark Smith',
                    status: 'Pending',
                },
                { 
                    ref: 746757453,
                    app_date: '12/03/2024', 
                    amt_applied: 1500000,
                    dealer: 'Automotors Ltd',
                    sales_agent: 'Mark Smith',
                    status: 'Denied',
                },
                { 
                    ref: 746757453,
                    app_date: '12/03/2024', 
                    amt_applied: 1500000,
                    dealer: 'Automotors Ltd',
                    sales_agent: 'Mark Smith',
                    status: 'Denied',
                },
                // Add more rows as needed
            ],
            originalRows: [],
            activeTab: 'All',
            filterStatus(status) {
                this.activeTab = status;
                if (status === 'All') {
                    this.rows = this.originalRows.slice();
                    return;
                }
                this.rows = this.originalRows.filter(row => row.status === status);
            },
            init() {
                // Save original rows when component initializes
                this.originalRows = this.rows.slice();
            },
        };
    }
</script>

</div>