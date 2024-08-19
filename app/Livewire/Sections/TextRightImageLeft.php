<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class TextRightImageLeft extends Component
{
    public $sectiondata;
    
    public function render()
    {
        return view('livewire.sections.text-right-image-left', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
