<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class LoanAppForm extends Component
{
    public $sectiondata;
    
    public function render()
    {
        return view('livewire.sections.loan-app-form', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}