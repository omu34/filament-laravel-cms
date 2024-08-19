<x-app-layout>
    <div>
        <div x-data="{ 
            slide: 'images/faqs-banner-min-webp.webp',
            title: 'Asset Finance Application',
            subTitle: 'Get Asset Financing with us which offers you great flexibility as you acquire assets.'
        }">
            <livewire:sections.other-banner/>
        </div>
        <div class="bg-white w-full flex justify-center pt-8 sm:pt-16 pb-8 sm:pb-12 px-8 sm:px-4 xl:px-0" data-aos="fade-up" data-aos-duration="1000" x-data="{                
            cta_title: 'Loan Application Process',
            cta_description: 'Please enter all your details below. We save your input progressively in case you close the tab or lose your internet connection, you can proceed from where you left off.',
            }">
            <livewire:sections.centered-cta-text />
        </div>
        <livewire:sections.app-multistep-form/>
    </div>
</x-app-layout>