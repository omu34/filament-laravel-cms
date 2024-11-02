<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class ContactUsSection extends Component
{

    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.contact-us-section', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
