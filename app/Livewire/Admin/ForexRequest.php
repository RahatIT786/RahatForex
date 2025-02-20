<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\MoneyForex;

class ForexRequest extends Component
{
    public $Forexmoney;
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
        return view('livewire.admin.forex-request')
        ->layout('Admin.layouts.app');
    }



    public function delete(MoneyForex $id)
    {
        $id->delete();

        session()->flash('message', 'Forex Request deleted successfully');

        // Update the list and count after deletion
        $this->Forexmoney = MoneyForex::all();
        $this->forexCount = $this->Forexmoney->count();
    }




}
