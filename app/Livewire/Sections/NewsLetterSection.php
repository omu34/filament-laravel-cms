<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Sections\NewsLetterSection as Newsletter;
use App\Models\Sections\Subscription;

class NewsLetterSection extends Component
{
    public $sectiondata;
    public $email;

    protected $rules = [
        'email' => 'required|email|unique:subscriptions,email',  // Ensures unique emails
    ];

    public function mount()
    {
        // Retrieve the first record from NewsLetterSection table or adjust as necessary
        $this->sectiondata = Newsletter::latest()->first();
    }

    public function render()
    {
        return view('livewire.sections.news-letter-section', [
            'sectiondata' => $this->sectiondata,
        ]);
    }


    public function submitEmail()
    {
        $this->validate();

        // Save the email in the subscriptions table
        Subscription::create([
            'email' => $this->email,
        ]);

        // Flash success message and reset the form
        session()->flash('success', 'You have successfully subscribed to the newsletter!');
        $this->reset('email');
    }
}
