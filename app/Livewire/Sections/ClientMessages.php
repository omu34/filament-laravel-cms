<?php

namespace App\Livewire\Sections;

use App\Models\Sections\Messages;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ClientMessages extends Component
{
    public $name;
    public $email;
    public $texts;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'texts' => 'required|string',
    ];

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


    public function render()
    {
        return view('livewire.sections.client-messages');
    }
}
