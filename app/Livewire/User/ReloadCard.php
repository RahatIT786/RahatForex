<?php

namespace App\Livewire\User;

use Livewire\Component;

class ReloadCard extends Component
{
    public function render()
    {
        return view('livewire.user.reload-card')
        ->layout('user.layouts.app');
    }
}
