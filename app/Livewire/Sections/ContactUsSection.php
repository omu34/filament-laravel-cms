<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Sections\Messages;
use Illuminate\Support\Facades\Session;
use App\Models\Sections\ContactUsSection as ContactUs;

class ContactUsSection extends Component
{
    public $sectiondata;
    public $name, $email, $texts;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'texts' => 'required|string',
    ];
    public function mount()
    {
        // Retrieve the first record from ContactUsSection table or adjust as necessary
        $this->sectiondata = ContactUs::latest()->first();
    }

    public function render()
    {
        return view('livewire.sections.Contact-us-section', [
            'sectiondata' => $this->sectiondata,
        ]);
    }


    public function addMessage()
    {
        $this->validate();

        Messages::create([
            'name' => $this->name,
            'email' => $this->email,
            'texts' => $this->texts,
        ]);

        Session::flash('message', 'Message sent successfully!');

        // Clear input fields
        $this->reset(['name', 'email', 'texts']);
    }
}
