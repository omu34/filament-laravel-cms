<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $user = Auth::user();

        // Redirect based on user type
        switch ($user->type) {
            case 'agent':
                return redirect()->route('agents.dashboard');
            case 'dealer':
                return redirect()->route('dealers.dashboard');
            default:
                return redirect()->route('customers.dashboard');
        }
    }
    public function render()
    {
        return view('livewire.pages.auth.login');
    }
}
