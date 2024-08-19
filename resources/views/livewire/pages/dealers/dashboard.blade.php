<x-app-layout>

    <x-app-header class="hidden"/>
    {{-- <x-login-app-header class="flex"/> --}}
    <livewire:welcome.navigation />
    
    <div>
        <livewire:pages.dealers.stats/>
        <div class="hidden md:block">
            <livewire:pages.dealers.applications-table/>
        </div>
        <div class="block md:hidden overflow-x-hidden">
            <livewire:sections.mobile-dealer-agent-table/>
        </div>
    </div>
</x-app-layout>
