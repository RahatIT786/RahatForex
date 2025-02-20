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
        $this->Forexmoney = MoneyForex::all();
        $this->forexCount = $this->Forexmoney->count();

        // Prepare the data for the chart (e.g., counts per month or category)

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
