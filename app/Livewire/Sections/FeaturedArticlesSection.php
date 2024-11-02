<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class FeaturedArticlesSection extends Component
{


    public $sectiondata;

    public function render()
    {
        return view(
            'livewire.sections.featured-articles-section',
            [
                'sectiondata' => $this->sectiondata,
            ]
        );
    }
}
