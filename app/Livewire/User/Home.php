<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\MoneyForex;
use App\Mail\ForexQuoteRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteRequestMail;


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
        $this->validate();  // Validate form inputs

        // Prepare the data to pass to the email
        $data = [
            'name' => $this->name,
            'mobile' => $this->mobile,
            'email' => $this->email,
        ];


        MoneyForex::create($data);
        // Send the email with the data
        Mail::to(['forex@rahat.in', 'nazim@rahat.in'])->send(new QuoteRequestMail($data));

        // Optionally reset the form fields after submission
        $this->reset();

        // Flash message to confirm the email was sent
        session()->flash('success', 'Quote request sent successfully!');
    }


}
