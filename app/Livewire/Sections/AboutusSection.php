<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Sections\AboutUsSection as About;

class AboutusSection extends Component
{
    public $sectiondata;


    public function mount()
    {
        // Retrieve the first record from ContactUsSection table or adjust as necessary
        $this->sectiondata = About::latest()->first();
    }

    public function render()
    {
        return view('livewire.sections.aboutus-section', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
