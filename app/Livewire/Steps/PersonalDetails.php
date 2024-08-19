<?php

namespace App\Livewire\Steps;

use Carbon\Carbon;
use App\Models\User;
use App\Sms\SendSms;
use App\Mail\SendOTP;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class PersonalDetails extends Component
{
    use SendSms;
    //! BUG: Create a cron job to delete expired OTPs
    //! BUG: What happens if email is already existing, inform the user to login?

    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $password;
    public $confirmPassword;
    public $verificationMethod;
    public $otp;
    public $termsPrivacy;
    public $user;

    public function mount()
    {
        $this->verificationMethod = 'email';
    }

    public function sendOtp()
    {
        $this->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string',
            'password' => 'required|string|min:8',
            'confirmPassword' => 'required|string|same:password',
            'verificationMethod' => 'required|string',
        ]);

        // Generate OTP
        $otp = mt_rand(100000, 999999);

        // Create a User and save the OTP
        $this->user = User::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
            'otp' => $otp,
            'type' => 'customer', // customer, agent, dealer, admin
            'otp_expires_at' => Carbon::now()->addMinutes(5),
        ]);

        $this->sendOtpLogic($otp);
    }

    public function sendOtpLogic($otp)
    {
        if ($this->verificationMethod == 'email') {
            Mail::to($this->email)->send(new SendOTP($this->firstName, $otp));
        } else {
            $this->sendSms($this->phone, "Dear " . $this->firstName . ", Thanks for signing up to Co-op Asset Finance. Your verification code is " . $otp);
        }

        session()->flash('success', 'OTP sent successfully.');
        $this->dispatch('otp-sent');
    }

    // Resend OTP
    public function resendOtp()
    {
        $otp = mt_rand(100000, 999999);

        $this->user->otp = $otp;
        $this->user->otp_expires_at = Carbon::now()->addMinutes(5);
        $this->user->save();

        $this->sendOtpLogic($otp);
    }

    public function validateOtpAndTerms()
    {
        //TODO: If the user already exists, and the OTP is verified, move to the next step
        $this->validate([
            'otp' => 'required|string',
            'termsPrivacy' => 'accepted',
        ]);

        if (!$this->user) {
            $this->addError('otp', 'The OTP is invalid.');
            return;
        }

        $expiresAt = Carbon::parse($this->user->otp_expires_at);
        if ($this->user->otp != $this->otp || $expiresAt->isPast()) {
            $this->addError('otp', 'The OTP is invalid.');
            return;
        }

        // Update user otp_verified and accepted_terms
        $this->user->otp_verified = true;
        $this->user->accepted_terms = true;
        $this->user->save();

        session()->flash('success', 'OTP verified successfully.');

        // Log the user in
        Auth::login($this->user);

        // Refresh the page
        $this->js('window.location.reload()');

        // Move to the next step
        // $this->dispatch('next-step');
    }

    public function closeAlert()
    {
        session()->forget('success');
    }

    public function render()
    {
        return view('livewire.steps.personal-details');
    }
}
