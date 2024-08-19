<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PopupLogin extends Component
{
    public $email;
    public $password;
    public $loginModalOpen = false;

    protected $rules = [
        'email' => ['required', 'string', 'email'],
        'password' => ['required', 'string'],
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->to('/user-account');
        }

        session()->flash('error', 'Invalid email or password.');
    }

    public function render()
    {
        return view('livewire.sections.popup-login');
    }
}
