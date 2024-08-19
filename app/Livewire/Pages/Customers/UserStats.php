<?php

namespace App\Livewire\Pages\Customers;

use Livewire\Component;
use App\Models\Loans\Customer;

class UserStats extends Component
{
    public $details;

    public function mount()
    {
        $this->details = Customer::where('id', auth()->user()->customer->id)
            ->withCount(['applications'])
            ->with('applications')
            ->get()
            ->map(function ($customer) {
                return [
                    'id' => $customer->id,
                    'name' => $customer->user->full_name,
                    'phone_icon' => 'images/user-ac-icon.svg',
                    'email_icon' => 'images/user-sms-icon.svg',
                    'applications_icon' => 'images/user-wallet-icon.svg',
                    'phone_no' => $customer->user->phone,
                    'email' => $customer->user->email,
                    'applications' => $customer->applications_count,
                ];
            })->toArray();
    }

    public function render()
    {
        return view('livewire.pages.customers.user-stats');
    }
}
