<?php

namespace App\Livewire\Pages\Dealers;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Loans\Application;
use Illuminate\Support\Facades\Log;

class ApplicationsTable extends Component
{
    use WithPagination;

    public $applications;

    public function mount()
    {
        $this->applications = Application::where('dealer_id', auth()->user()->dealer->id)
            ->with('agent.user', 'customer.user', 'dealer', 'customer.extraIncomes', 'customer.documents')
            ->get()
            ->map(function ($application) {
                $application->date_created = $application->created_at->format('M d, Y');
                $application->other_income = $application->customer->extraIncomes;
                $application->document_uploads = $application->customer->documents;
                return $application;
            });
    }

    public function render()
    {
        // dd($this->applications);
        return view('livewire.pages.dealers.applications-table', [
            'applications' => $this->applications
            // Application::where('dealer_id', auth()->user()->dealer->id)
            //     ->with('agent.user', 'customer.user', 'dealer', 'customer.extraIncomes', 'customer.documents')
            //     ->paginate(3)
            // ->map(function ($application) {
            //     $application->date_created = $application->created_at->format('M d, Y');
            //     $application->other_income = $application->customer->extraIncomes;
            //     $application->document_uploads = $application->customer->documents;
            //     return $application;
            // })
        ]);
    }
}
