<x-app-layout>
    <div>

        <livewire:sections.home-banner/>

        <section class="bg-brand-tlg-five w-full flex justify-center p-8 sm:px-4 sm:py-12" data-aos="fade-up" data-aos-duration="1000" x-data="{                
          cta_title: 'Get Asset Financing with Us',
          cta_description: 'This is a self-securing loan product for the financing of moveable assets. It offers great flexibility and helps applicants free up cash by enabling them to acquire assets with minimum fuss. Co-op Insurance Financing is made available for the assets purchased, with the option of renewing it periodically over the duration of the facility and beyond.',
          }">
          <livewire:sections.centered-cta-text />
        </section>
        <livewire:sections.text-right-image-left />
        <livewire:sections.text-left-image-right />
        <livewire:sections.home-loan-calc />
        <livewire:sections.popup-loan-calc />
        <livewire:sections.recommended-products />
        <livewire:sections.faqs-content />
    </div>
</x-app-layout>


