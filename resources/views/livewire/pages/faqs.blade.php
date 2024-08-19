<x-app-layout>
    <div>
        <div x-data="{ 
            slide: 'images/faqs-banner-min-webp.webp',
            title: 'FAQs',
            subTitle: 'Frequently Asked Questions'
        }">
            <livewire:sections.other-banner/>
        </div>
        <livewire:sections.faqs-content/>
    </div>
</x-app-layout>