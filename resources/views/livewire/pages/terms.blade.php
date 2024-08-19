<x-app-layout>
    <div>
        <div x-data="{ 
            slide: 'images/tnc-banner-min-webp.webp',
            title: 'Terms & Conditions',
            subTitle: 'Get Asset Financing with us which offers you great flexibility as you acquire assets.'
        }">
            <livewire:sections.other-banner/>
        </div>
        <livewire:sections.terms-content/>
    </div>
</x-app-layout>