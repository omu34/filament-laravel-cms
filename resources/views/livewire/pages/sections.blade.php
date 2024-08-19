@php
    use Illuminate\Support\Facades\Log;
@endphp
<div>
    @if($section->id == 1)
        <livewire:sections.banner :sectiondata="$sectiondata"/>
    @elseif($section->id == 2)
        <livewire:sections.centered-cta-text :sectiondata="$sectiondata"/>
    @elseif($section->id == 3)
    <livewire:sections.text-right-image-left :sectiondata="$sectiondata"/>
    @elseif($section->id == 4)
        <livewire:sections.text-left-image-right :sectiondata="$sectiondata"/>
    @elseif($section->id == 5)
        <livewire:sections.home-loan-calc :sectiondata="$sectiondata"/>
    @elseif($section->id == 6)
        <livewire:sections.recommended-products :sectiondata="$sectiondata"/>
    @elseif($section->id == 7)
        <livewire:sections.faqs-content :sectiondata="$sectiondata" :section="$section"/>
    @elseif($section->id == 8)
        <livewire:sections.loan-app-form :sectiondata="$sectiondata"/>
    @elseif($section->id == 9)
        <livewire:sections.terms-content :sectiondata="$sectiondata"/>
    @endif
</div>
