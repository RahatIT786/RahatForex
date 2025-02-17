<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\MoneyForex;
use App\Mail\ForexQuoteRequest;
use Illuminate\Support\Facades\Mail;


class Home extends Component
{
    public function render()
    {
        return view('livewire.user.home')
        ->layout('user.layouts.app');
    }

    public $mobile;
    public $email;
    public $name;

    protected $rules = [
        'name' => 'required',
        'mobile' => 'required|numeric|min:1',
        'email' => 'required|email',
    ];

    public function submitForm()
    {
        $this->validate();

        MoneyForex::create([
            'name' => $this->name,
            'mobile' => $this->mobile,
            'email' => $this->email,
        ]);

        try {
            // Send a simple raw email to test SMTP
            Mail::raw('This is a test email for Forex quote request', function ($message) {
                $message->to(['ahamadraja9721@gmail.com', 'rahatit486@gmail.com'])
                        ->subject('Test Forex Quote Request');
            });


        } catch (\Exception $e) {
            session()->flash('error', 'Error sending email: ' . $e->getMessage());
        }
        session()->flash('success', 'Forex quote request sent successfully.');
        $this->reset();


    }


}
