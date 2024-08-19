<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Loans\Dealer;

class DealerSectionOne extends Component
{
    public $dealer; // Add this line

    public function mount() // Add this method
    {
        $this->dealer = Dealer::where('user_id', auth()->id())->first();

    }

    public function render()
    {
        return view('livewire.sections.dealer-section-one', ['dealer' => $this->dealer]);
    }
}
