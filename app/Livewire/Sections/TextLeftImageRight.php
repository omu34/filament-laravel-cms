<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class TextLeftImageRight extends Component
{
    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.text-left-image-right', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
