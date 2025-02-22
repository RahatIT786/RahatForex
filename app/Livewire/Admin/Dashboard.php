<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\MoneyForex;
use App\Models\Sellsforex;

class Dashboard extends Component
{
    public $forexCount;

    public $sellforex;
    public $sellforexCount;


    public function mount()
    {
        $this->sellforex = Sellsforex::all();
        $this->sellforexCount = $this->sellforex->count();



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
