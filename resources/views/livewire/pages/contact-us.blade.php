<x-app-layout>
    <div>
        <div x-data="{
            slide: 'images/faqs-banner-min-webp.webp',
            title: 'Asset Finance Application',
            subTitle: 'Get Asset Financing with us which offers you great flexibility as you acquire assets.'
        }">
            <livewire:sections.other-banner/>
        </div>
        <div class="">
            <livewire:sections.centered-cta-text />
        </div>
        <livewire:sections.app-multistep-form/>
    </div>
</x-app-layout>
