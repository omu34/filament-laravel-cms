<?php

namespace App\Livewire\Pages\Dealers;

use Livewire\Component;
use App\Models\Loans\Dealer;

class Stats extends Component
{
    public $details;
    public $dealer;

    public function mount()
    {
        $this->details = Dealer::where('id', auth()->user()->dealer->id)
            ->withCount(['applications', 'agents'])
            ->with('applications')
            ->get()
            ->map(function ($dealer) {
                return [
                    'id' => $dealer->id,
                    'name' => $dealer->company_name,
                    'agents_icon' => '/images/agents-icon.svg',
                    'customers_icon' => '/images/customers-icon.svg',
                    'loans_icon' => '/images/loans-icon.svg',
                    'agents' => $dealer->agents_count,
                    'customers' => $dealer->applications->pluck('customer_id')->unique()->count(),
                    'loans' => $dealer->applications_count,
                ];
            })->toArray();

        $this->dealer = Dealer::where('user_id', auth()->id())->first();
    }

    public function render()
    {
        return view('livewire.pages.dealers.stats', [
            'details' => $this->details,
            'dealer' => $this->dealer,
        ]);
    }
}
