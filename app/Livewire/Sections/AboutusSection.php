<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class AboutusSection extends Component
{
    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.aboutus-section', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
