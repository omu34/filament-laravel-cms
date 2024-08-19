<?php

namespace App\Livewire\Steps;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Loans\Document;
use App\Models\Loans\Principal;
use App\Models\Loans\Application;
use App\Models\Loans\ExtraIncome;
use Illuminate\Support\Facades\Log;
use App\Models\Loans\CustomerDocument;
use App\Models\Loans\InsuranceCompany;

class DocumentUpload extends Component
{
    use WithFileUploads;
    //! BUG: Customer should not reupload documents if they are already uploaded

    public $incomeSource; // salary or business
    public $salaryDocs;
    public $partnershipDocs;
    public $companyDocs;
    public $salaryUploads = [];
    public $partnershipUploads = [];
    public $companyUploads = [];
    public $businessType; // partnership or company
    public $monthlyIncome;
    public $directors = [];
    public $owners = [];
    public $extraIncome;
    public $extraIncomeSources = [];
    public $addInsurance;
    public $insuranceCompany;
    public $premiumFinancing;
    public $insuranceCompanies;
    public $user;

    public function mount()
    {
        $this->incomeSource = 'salary';
        $this->salaryDocs = Document::where('income_source', 'salary')->get();
        $this->partnershipDocs = Document::where([['income_source', 'business'], ['business_type', 'partnership']])->get();
        $this->companyDocs = Document::where([['income_source', 'business'], ['business_type', 'company']])->get();
        $this->businessType = 'company';
        $this->extraIncome = 'no';
        $this->extraIncomeSources = [
            ['source' => '', 'amount' => '']
        ];
        $this->addInsurance = 'yes';
        $this->premiumFinancing = 'yes';
        $this->insuranceCompanies = InsuranceCompany::where('is_active', true)->get();
        $this->insuranceCompany = '';
        $this->user = auth()->user();
    }

    public function addIncomeSource()
    {
        $this->extraIncomeSources[] = ['source' => '', 'amount' => ''];
    }

    public function removeIncomeSource($index)
    {
        unset($this->extraIncomeSources[$index]);
        $this->extraIncomeSources = array_values($this->extraIncomeSources); // Reindex the array
    }

    public function updateIncomeSource($index, $field, $value)
    {
        $this->extraIncomeSources[$index][$field] = $value;
    }

    public function uploadDocuments()
    {
        // dd($this->extraIncomeSources);
        $this->validate([
            'incomeSource' => 'required',
            //! BUG: The file fields only check required not the other conditions: |file|mimes:pdf|max:10240
            'salaryUploads' => 'exclude_if:incomeSource,business|required', // file|mimes:pdf|max:10240
            'businessType' => 'exclude_if:incomeSource,salary|required', // required_if:incomeSource,business
            'monthlyIncome' => 'exclude_if:incomeSource,salary',
            //! BUG: handle director & owner being deleted in the UI
            'directors' => 'exclude_if:incomeSource,salary|required_if:businessType,company', // file|mimes:pdf|max:10240
            'companyUploads' => ' exclude_if:incomeSource,salary|required_if:businessType,company', // file|mimes:pdf|max:10240
            'owners' => 'required_if:businessType,partnership', // file|mimes:pdf|max:10240
            'partnershipUploads' => 'required_if:businessType,partnership', // file|mimes:pdf|max:10240
            'extraIncome' => 'required',
            'addInsurance' => 'required',
            'insuranceCompany' => 'required_if:addInsurance,yes',
            'premiumFinancing' => 'required_if:addInsurance,yes',
        ], [
            'salaryUploads.required' => 'This document is required.',
            'businessType.required' => 'The business type field is required.',
            'directors.required_if' => 'This document is required.',
            'companyUploads.required_if' => 'This document is required.',
            'owners.required_if' => 'This document is required.',
            'partnershipUploads.required_if' => 'This document is required.',
        ]);

        foreach ($this->salaryUploads as $index => $attachment) {
            CustomerDocument::create([
                'customer_id' => $this->user?->customer?->id,
                'document_type' => $this->salaryDocs[$index]->name,
                'file_path' => $attachment->store('documents'),
            ]);
        }

        foreach ($this->partnershipUploads as $index => $attachment) {
            CustomerDocument::create([
                'customer_id' => $this->user?->customer?->id,
                'document_type' => $this->partnershipDocs[$index]->name,
                'file_path' => $attachment->store('documents'),
            ]);
        }

        foreach ($this->companyUploads as $index => $attachment) {
            CustomerDocument::create([
                'customer_id' => $this->user?->customer?->id,
                'document_type' => $this->companyDocs[$index]->name,
                'file_path' => $attachment->store('documents'),
            ]);
        }

        foreach ($this->directors as $index => $director) {
            Principal::create([
                'customer_id' => $this->user?->customer?->id,
                'file_path' => $director->store('documents'),
                'type' => 'director',
            ]);
        }

        foreach ($this->owners as $index => $owner) {
            Principal::create([
                'customer_id' => $this->user?->customer?->id,
                'file_path' => $owner->store('documents'),
                'type' => 'owner',
            ]);
        }

        if ($this->extraIncome === 'yes') {
            $customerId = $this->user?->customer?->id;

            foreach ($this->extraIncomeSources as $source) {
                ExtraIncome::create([
                    'customer_id' => $customerId,
                    'source' => $source['source'],
                    'amount' => $source['amount'],
                ]);
            }
        }

        $this->user->customer->update([
            'income_source' => $this->incomeSource,
            'business_type' => $this->incomeSource === 'business' ? $this->businessType : '',
            'monthly_income' => $this->incomeSource === 'business' ? $this->monthlyIncome : null,
            'extra_income' => $this->extraIncome === 'yes' ? true : false,
        ]);

        $application = Application::where('customer_id', $this->user?->customer?->id)->first();
        // $application = Application::where('customer_id', 1)->first();

        $application->update([
            'insurance_company_id' => $this->addInsurance === 'yes' ? $this->user?->customer?->applications->last()->insurance_company_id : null,
            'premium_financing' => $this->addInsurance === 'yes' ? $this->premiumFinancing : 'no',
            'status' => 'pending',
        ]);

        session()->flash('success', 'Documents uploaded successfully.');
        $this->dispatch('next-step');
    }

    public function render()
    {
        return view('livewire.steps.document-upload', [
            'salaryDocs' => $this->salaryDocs,
            'partnershipDocs' => $this->partnershipDocs,
            'companyDocs' => $this->companyDocs,
            'insuranceCompanies' => $this->insuranceCompanies,
        ]);
    }
}
