<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Sellsforex;
use Illuminate\Support\Facades\Mail;
use App\Mail\SellForexMail;

class SellForex extends Component
{
    public function render()
    {
        return view('livewire.user.sell-forex')
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

    public function submitSell()
    {
        $this->validate();  // Validate form inputs


        $data = [
            'name' => $this->name,
            'mobile' => $this->mobile,
            'email' => $this->email,
        ];


        SellsForex::create($data);
        // Send the email with the data forex@rahat.in

        Mail::to(['forex@rahat.in', 'nazim@rahat.in'])->send(new SellForexMail($data));

        // Optionally reset the form fields after submission
        $this->reset();

        // Flash message to confirm the email was sent
        session()->flash('success', 'Quote request sent successfully!');
    }
}
