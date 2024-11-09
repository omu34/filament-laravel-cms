<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Sections\OurExperienceSection as Title;
use App\Models\Content\OurExperiencesContent;

class OurExperienceSection extends Component
{

    public $experiences, $sectiondata;


    public function mount()
    {
        $this->fetchExperiences();
    }

    public function fetchExperiences()
    {
        $this->sectiondata = Title::latest()->first();
        $this->experiences = OurExperiencesContent::latest()->take(8)->first();
    }


    public function render()
    {
        return view('livewire.sections.our-experience-section', [
            'experiences' => $this->experiences,
            'sectiondata' => $this->sectiondata
        ]);
    }
}
