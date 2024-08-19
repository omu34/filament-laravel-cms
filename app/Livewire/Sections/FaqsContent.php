<?php

namespace App\Livewire\Sections;

use App\Models\Content\Faqs;
use Livewire\Component;

class FaqsContent extends Component
{
    public $faqs;
    public $allFaqs;
    public $page;
    public $section;
    public $sectiondata;

    public function mount()
    {
        $this->page = $this->section->pivot->page_id == 1 ? 'home' : 'faqs';
        if ($this->page == 'home') {
            $this->faqs = Faqs::latest()->take(4)->get();
        } elseif ($this->page == 'faqs') {
            $this->faqs = Faqs::latest()->get(); // Fetch all FAQs for the FAQs page
        }
    }

    public function render()
    {
        return view('livewire.sections.faqs-content', [
            'section' => $this->section,
            'page' => $this->page,
            'items' => $this->faqs,
            'sectiondata' => $this->sectiondata,
        ]);
    }

    // protected function resolveFaqs()
    // {
    //     if ($this->page == 'home') {
    //         return $this->faqs;
    //     } elseif ($this->page == 'faqs') {
    //         return $this->allFaqs;
    //     }

    //     return [];
    // }

}
