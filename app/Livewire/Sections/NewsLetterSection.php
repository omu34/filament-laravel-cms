<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class NewsLetterSection extends Component
{

    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.news-letter-section', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
