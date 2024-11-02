<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class MasikaTeamSection extends Component
{

    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.masika-team-section', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
