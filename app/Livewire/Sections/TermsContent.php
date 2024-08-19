<?php

namespace App\Livewire\Sections;

use App\Models\Sections\Terms;
use Livewire\Component;

class TermsContent extends Component
{
    public $terms;
    public $sectiondata;

    public function mount()
    {
        $this->terms = Terms::all();
    }

    public function render()
    {
        return view('livewire.sections.terms-content', [
            'terms' => $this->terms,
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
