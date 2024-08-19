<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class CenteredCtaText extends Component
{
    public $sectiondata;

    public function render()
    {  
        return view('livewire.sections.centered-cta-text', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
