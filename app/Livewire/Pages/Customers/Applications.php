<?php

namespace App\Livewire\Pages\Customers;

use Livewire\Component;
use App\Models\Loans\Application;

class Applications extends Component
{
    public $applications;

    public function mount()
    {
        $this->applications = Application::where('customer_id', auth()->user()->customer->id)
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
        return view('livewire.pages.customers.applications', [
            'applications' => $this->applications
        ]);
    }
}
