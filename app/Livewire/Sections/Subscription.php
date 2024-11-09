<?php

namespace App\Livewire\Sections;

use App\Models\Sections\Subscription as Subscribe;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class Subscription extends Component
{
    private $email;

    protected $rules = [
        'email' => 'required|email|unique:subscriptions,email',
    ];

    public function submitEmail()
    {
        $this->validate();

        try {
            // Save email to the subscriptions table
            Subscribe::create([
                'email' => $this->email,
            ]);

            // Send confirmation email to the user
            Mail::raw("Thank you for subscribing to our newsletter!", function ($message) {
                $message->to($this->email)
                    ->subject('Subscription Successful');
            });

            session()->flash('success', 'You have successfully subscribed to the newsletter!');
            $this->reset('email');  // Reset the form
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.sections.subscriber-newsletter');
    }
}
