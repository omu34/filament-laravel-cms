<?php

namespace App\Livewire\Pages\Auth;

use App\Models\User;
use App\Mail\NewDealer;
use Livewire\Component;
use App\Models\Loans\Dealer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;

class PopupRegisterDealer extends Component
{
    public $company_name;
    public $location;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $password;
    public $confirm_password;

    public function register()
    {
        $this->validate([
            'company_name' => 'required|string',
            'location' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:password',
        ]);

        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
            'type' => 'dealer',
        ]);

        Dealer::create([
            'user_id' => $user->id,
            'company_name' => $this->company_name,
            'location' => $this->location,
        ]);

        Mail::to('coopassetfinance@co-opbank.co.ke')->send(new NewDealer($this->company_name, $this->location, $this->first_name, $this->last_name, $this->email, $this->phone));

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dealers.dashboard');
    }

    public function render()
    {
        return view('livewire.pages.auth.popup-register-dealer');
    }
}
