<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Banner extends Component
{
    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.banner', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
