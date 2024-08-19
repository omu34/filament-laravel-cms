<x-app-layout>

    <x-app-header class="hidden"/>
    {{-- <x-login-app-header class="flex"/>  --}}
    <livewire:welcome.navigation />
    
    <div>
        <livewire:sections.agent-section-one/>
        <div class="hidden md:block">
            <livewire:sections.dealer-agent-table/>
        </div>
        <div class="block md:hidden overflow-x-hidden">
            <livewire:sections.mobile-dealer-agent-table/>
        </div>
    </div>
</x-app-layout>
