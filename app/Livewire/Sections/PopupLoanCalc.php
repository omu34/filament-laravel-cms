<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class PopupLoanCalc extends Component
{
    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.popup-loan-calc', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
