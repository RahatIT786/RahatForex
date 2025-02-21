<?php

namespace App\Livewire\User;

use Livewire\Component;

class StudyAboard extends Component
{
    public function render()
    {
        return view('livewire.user.study-aboard')
        ->layout('user.layouts.app');
    }
}
