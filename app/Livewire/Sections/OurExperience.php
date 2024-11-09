<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\OurExperiencesContent;

class OurExperience extends Component
{

    public $experiences;

    public function mount()
    {
        $this->experiences = OurExperiencesContent::latest()->take(8)->first();
    }
    public function render()
    {
        return view('livewire.sections.our-experience-section', [
            'experiences' => $this->experiences
        ]);
    }
}
