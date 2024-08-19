<div>

    <div x-data="{ createAgentModalOpen: false }">
        <div x-data="{}" x-ref="search" x-show="createAgentModalOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex min-h-full items-center justify-center p-4 text-center">
                <div x-cloak @click="createAgentModalOpen = false" x-show="createAgentModalOpen" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0" 
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" 
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true">
                </div>

                <div class="relative bg-white border-solid border-2 border-brand-green rounded-lg mx-auto max-w-3xl pt-4 pb-10 px-4" x-data="{}" x-cloak x-show="createAgentModalOpen"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <div class="flex items-center space-x-4 justify-end">
                        <button type="button" @click="createAgentModalOpen = false" class="hover:opacity-80">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.55558 15.9998C3.55558 9.14409 9.14427 3.55539 16 3.55539C22.8558 3.55539 28.4445 9.14409 28.4445 15.9998C28.4445 22.8556 22.8558 28.4443 16 28.4443C9.14427 28.4443 3.55558 22.8556 3.55558 15.9998ZM19.7734 21.6621C20.2497 21.6621 20.7331 21.4839 21.1086 21.1084C21.8424 20.3746 21.8424 19.1718 21.1086 18.438L18.6704 15.9998L21.1086 13.5617C21.8424 12.8279 21.8424 11.6251 21.1086 10.8913C20.3748 10.1575 19.1719 10.1575 18.4381 10.8913L16 13.3294L13.5619 10.8913C12.8281 10.1575 11.6253 10.1575 10.8915 10.8913C10.1577 11.6251 10.1577 12.8279 10.8915 13.5617L13.3296 15.9998L10.8915 18.438C10.1577 19.1718 10.1577 20.3746 10.8915 21.1084C11.267 21.4839 11.7503 21.6621 12.2267 21.6621C12.703 21.6621 13.1864 21.4839 13.5619 21.1084L16 18.6702L18.4381 21.1084C18.8136 21.4839 19.297 21.6621 19.7734 21.6621Z" fill="#CA4B3D" stroke="#CA4B3D" stroke-width="1.77778"/>
                            </svg>                                
                        </button>
                    </div>
                    <div class="w-full flex flex-col justify-start items-start gap-4 px-5">
                        <div class="w-full flex justify-start items-start gap-10">
                            <div class="grid gap-8 justify-items-start">
                                <h4 class="text-brand-green">Add New Sales Agent</h4>
                                <form action="" class="grid gap-y-8 w-full">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-8 w-full">
                                        <div class="grid grid-cols-1 gap-2 custom-select">
                                            <label class="text-left" for="first_name">First name<span class="text-required-red">*</span></label>
                                            <input type="text" name="first_name" id="first_name">
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 custom-select">
                                            <label class="text-left" for="last_name">Last name<span class="text-required-red">*</span></label>
                                            <input type="text" name="last_name" id="last_name">
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 custom-select">
                                            <label class="text-left" for="e_add">Email address<span class="text-required-red">*</span></label>
                                            <input type="email" name="e_add" id="e_add">
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 custom-select">
                                            <label class="text-left" for="pno">Phone number<span class="text-required-red">*</span></label>
                                            <input type="text" name="pno" id="pno">
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 custom-select">
                                            <label class="text-left" for="agent_pass">Password<span class="text-required-red">*</span></label>
                                            <input type="password" name="agent_pass" id="agent_pass">
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 custom-select">
                                            <label class="text-left" for="c_agent_pass">Confirm Password<span class="text-required-red">*</span></label>
                                            <input type="password" name="c_agent_pass" id="c_agent_pass">
                                        </div>
                                    </div>
                                    <div class="mt-2 w-full flex justify-center">
                                        <div class="w-44 sm:w-1/2 px-4 py-2 flex items-center justify-center rounded-lg  bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md">
                                            <button type="submit" class="text-sm">
                                                Create Account
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
        <div class="w-60 xl:w-fit px-4 py-2 flex items-center justify-center rounded-lg bg-brand-green hover:bg-brand-light-green text-white border-2 shadow-md" x-on:click="createAgentModalOpen = !createAgentModalOpen">
            <button type="button" class="text-sm">
                Create Agent Account
            </button>
            <svg class="pl-2" width="25" height="25" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.4" d="M16.5 9.5C16.5 13.366 13.366 16.5 9.5 16.5C5.63401 16.5 2.5 13.366 2.5 9.5C2.5 5.63401 5.63401 2.5 9.5 2.5C13.366 2.5 16.5 5.63401 16.5 9.5Z" fill="white" stroke="white"/>
                <path d="M8.55477 12.71C8.41227 12.71 8.26977 12.6575 8.15727 12.545C7.93977 12.3275 7.93977 11.9675 8.15727 11.75L10.4073 9.5L8.15727 7.25C7.93977 7.0325 7.93977 6.6725 8.15727 6.455C8.37477 6.2375 8.73477 6.2375 8.95227 6.455L11.5998 9.1025C11.8173 9.32 11.8173 9.68 11.5998 9.8975L8.95227 12.545C8.83977 12.6575 8.69727 12.71 8.55477 12.71Z" fill="white"/>
            </svg>
        </div>

    </div>

</div>
