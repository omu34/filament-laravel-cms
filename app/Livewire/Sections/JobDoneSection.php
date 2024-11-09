<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Sections\JobDone;

class JobDoneSection extends Component
{
    public $sectiondata;

    public function mount()
    {
        $this->sectiondata = JobDone::latest()->first();;
    }

    public function render()
    {
        return view('livewire.sections.job-done-section', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
