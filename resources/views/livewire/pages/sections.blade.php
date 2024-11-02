@php
    use Illuminate\Support\Facades\Log;
@endphp
<div>
    @if ($section->id == 1)
        <livewire:sections.banner :sectiondata="$sectiondata" />
    @elseif($section->id == 2)
        <livewire:sections.aboutus-section :sectiondata="$sectiondata" />
    @elseif($section->id == 3)
        <livewire:sections.our-experience-section :sectiondata="$sectiondata" />
    @elseif($section->id == 4)
        <livewire:sections.news-letter-section :sectiondata="$sectiondata" />
    @elseif($section->id == 5)
    <livewire:sections.job-done-section :sectiondata="$sectiondata" />
    @elseif($section->id == 6)
        <livewire:sections.contact-us-section :sectiondata="$sectiondata" />
    @elseif($section->id == 7)
        <livewire:sections.masika-team-section :sectiondata="$sectiondata" :section="$section" />
    @elseif($section->id == 8)
        <livewire:sections.featured-articles-section :sectiondata="$sectiondata" />


    {{-- @elseif($section->id == 9)
        <livewire:sections.terms-content :sectiondata="$sectiondata" />
    @elseif($section->id == 10)
        <livewire:sections.centered-cta-text :sectiondata="$sectiondata" />
    @elseif($section->id == 11)
        <livewire:sections.text-right-image-left :sectiondata="$sectiondata" />
    @elseif($section->id == 12)
        <livewire:sections.text-left-image-right :sectiondata="$sectiondata" />
    @elseif($section->id == 13)
        <livewire:sections.home-loan-calc :sectiondata="$sectiondata" />
    @elseif($section->id == 14)
        <livewire:sections.recommended-products :sectiondata="$sectiondata" />
    @elseif($section->id == 15)
        <livewire:sections.faqs-content :sectiondata="$sectiondata" :section="$section" />
    @elseif($section->id == 16)
        <livewire:sections.loan-app-form :sectiondata="$sectiondata" />
    @elseif($section->id == 17)
        <livewire:sections.terms-content :sectiondata="$sectiondata" /> --}}
    @endif
</div>
