<?php

namespace App\Livewire\User;

use Livewire\Component;

class SellForex extends Component
{
    public function render()
    {
        return view('livewire.user.sell-forex')
        ->layout('user.layouts.app');
    }
}
