<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\MoneyForex;

class Dashboard extends Component
{
    public $forexCount;



    public function mount()
    {
        // Get all Forex requests
        $this->Forexmoney = MoneyForex::all();

        // Count total forex requests
        $this->forexCount = $this->Forexmoney->count();
      
       


    }


    public function render()
    {
        return view('livewire.admin.dashboard')
        ->layout('Admin.layouts.app');
    }
}
