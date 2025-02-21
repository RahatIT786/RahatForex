<?php

namespace App\Livewire\User;

use Livewire\Component;

class SendMoney extends Component
{
    public function render()
    {
        return view('livewire.user.send-money')
        ->layout('user.layouts.app');
    }
}
