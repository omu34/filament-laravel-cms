<?php

namespace App\Livewire\Steps;

use Livewire\Component;
use App\Models\Applications\Dealer;
use Livewire\Attributes\Url;
use App\Models\Applications\Customer;
use App\Models\Settings\Branch;
use App\Models\Applications\Application;

class AccountDetails extends Component
{
    public $idMethod;
    public $idNumber;
    public $passportNumber;
    public $passportExpiry;
    public $customerType;
    public $kraPin;
    public $amount;
    public $dealer;
    public $branch;
    public $branches;
    public $dealers;
    public $user;

    public function mount()
    {
        $this->branch = '';
        $this->dealer = '';
        $this->branches = Branch::where('is_active', true)->get();
        $this->dealers = Dealer::where('is_approved', true)->get();
        $this->idMethod = 'nid';
        $this->customerType = 'new';
        $this->user = auth()->user();
        $this->idNumber = $this->user->customer->id_number ?? '';
        $this->passportNumber = $this->user->customer->passport_number ?? '';
        $this->passportExpiry = $this->user->customer->passport_expiry ?? null;
        $this->kraPin = $this->user?->customer?->kra_pin ?? '';
        $this->amount = $this->user?->customer?->applications->last()->amount ?? null;
    }

    public function updateAccountDetails()
    {
        $this->validate([
            'idMethod' => 'required|string',
            'idNumber' => 'exclude_if:idMethod,passport|required|string',
            'passportNumber' => 'exclude_if:idMethod,nid|required|string',
            'passportExpiry' => 'exclude_if:idMethod,nid|required|date',
            'customerType' => 'required|string',
            'branch' => 'exclude_if:customerType,new|required|exists:branches,id',
            'kraPin' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        // Save the data to the Customer model
        $customer = Customer::updateOrCreate(
            ['user_id' => $this->user->id],
            [
                'id_number' => $this->idNumber,
                'passport_number' => $this->passportNumber,
                'passport_expiry' => $this->passportExpiry,
                'type' => $this->customerType,
                //! BUG: The branch_id is not being saved
                'branch_id' => $this->user?->customer?->branch_id ?? null,
                'kra_pin' => $this->kraPin,
            ]
        );

        // Check if there is an application with draft/pending status
        $application = Application::where('customer_id', $this->user?->customer?->id)
            ->whereIn('status', ['draft', 'pending'])
            ->first();

        // If there is an application with draft/pending status, update the amount and dealer
        if ($application) {
            $application->update([
                'amount' => $this->amount,
                //! BUG: The dealer_id is not being saved
                'dealer_id' => $this->user?->customer?->applications->last()->dealer_id ?? null,
            ]);

            $this->dispatch('next-step');
            return;
        } else {
            // If there is no application with draft/pending status, create a new application
            Application::create([
                'customer_id' => $customer->id,
                'amount' => $this->amount,
                //! BUG: The dealer_id is not being saved
                'dealer_id' => $this->user?->customer?->applications->last()->dealer_id ?? null,
                'reference_number' => mt_rand(100000000, 999999999),
                'status' => 'draft',
            ]);

            $this->dispatch('next-step');
            return;
        }
    }


    public function render()
    {

        return view('livewire.steps.account-details', [
            'branches' => $this->branches,
            'dealers' => $this->dealers
        ]);
    }
}
