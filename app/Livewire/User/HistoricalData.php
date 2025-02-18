<?php

namespace App\Livewire\User;

use Livewire\Component;

class HistoricalData extends Component
{
    public function render()
    {
        return view('livewire.user.historical-data')
        ->layout('user.layouts.app');
    }
}
