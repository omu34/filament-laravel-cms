<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class HomeLoanCalc extends Component
{
    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.home-loan-calc', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
