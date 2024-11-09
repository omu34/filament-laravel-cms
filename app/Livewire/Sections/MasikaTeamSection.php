<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Sections\MasikaTeamSection as Team;
use App\Models\Content\MasikaTeamContent;

class MasikaTeamSection extends Component
{

    // public $teams;
    public $contents;
    public $sectiondata;


    public function mount()
    {
        // Retrieve the first record from NewsLetterSection table or adjust as necessary
        $this->sectiondata = Team::latest()->first();
        $this->contents = MasikaTeamContent::latest()->take(5)->first();
    }

    public function render()
    {
        return view('livewire.sections.masika-team-section', [
            // 'teams' => $this->teams,
            'contents' => $this->contents,
            'sectiondata' => $this->sectiondata
        ]);
    }
}
