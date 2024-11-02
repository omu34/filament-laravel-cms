<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\OurExperience;

class OurExperienceSection extends Component
{
    public $experiences;
    public $sectiondata;

    public function mount()
    {
        $this->experiences = OurExperience::all();
    }

    public function render()
    {
        return view('livewire.sections.our-experience-section', [
            'experiences' => $this->experiences,
            'sectiondata' => $this->sectiondata
        ]);
    }
}
