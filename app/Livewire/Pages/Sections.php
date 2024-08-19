<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Sections extends Component
{
    public $section;
    public $sectiondata;

    public function mount()
    {
        if ($this->section->model_type == 'App\Models\Sections\Banner') {
            $this->sectiondata = $this->section->model_type::where('page_section_id', $this->section->pivot->id)->get();
        } else {
            $this->sectiondata = $this->section->model_type::where('page_section_id', $this->section->pivot->id)->first();
        }
    }

    public function render()
    {
        return view('livewire.pages.sections', [
            'section' => $this->section,
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
