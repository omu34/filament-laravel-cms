<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class JobDoneSection extends Component
{

    public $sectiondata;
    public function render()
    {
        return view(
            'livewire.sections.job-done-section',
            [
                'sectiondata' => $this->sectiondata,
            ]
        );;
    }
}
