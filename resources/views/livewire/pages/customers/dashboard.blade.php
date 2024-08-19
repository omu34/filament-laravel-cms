<x-app-layout>

    <x-app-header class="hidden"/>
    {{-- <x-login-app-header class="flex"/> --}}
    <livewire:welcome.navigation />

    <div>
        <livewire:pages.customers.user-stats/>
        <div class="hidden md:block">
            <livewire:pages.customers.applications/>
        </div>
        <div class="block md:hidden overflow-x-hidden">
            <livewire:sections.mobile-user-table/>
        </div>
    </div>
</x-app-layout>
