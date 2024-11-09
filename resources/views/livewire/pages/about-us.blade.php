<x-app-layout>
    <div>
        <div x-data="{
            slide: '/public/images/about-us.jpg',
            title: 'About Us',
            subTitle: 'We are a great advocate Company.'
        }">
            <livewire:sections.other-banner/>
        </div>
        <div class="">
            <livewire:sections.masika-team-section />
        </div>
        <livewire:sections.aboutus-section/>
    </div>
</x-app-layout>
