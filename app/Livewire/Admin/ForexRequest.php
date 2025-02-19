<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\MoneyForex;

class ForexRequest extends Component
{
    public $Forexmoney;

    public function mount()
    {
        $this->Forexmoney = MoneyForex::all();
    }

    public function render()
    {


        return view('livewire.admin.forex-request')
        ->layout('Admin.layouts.app');
    }

    public function delete(MoneyForex $id)
    {
        $id->delete();

        session()->flash('message', 'forex details delete successfully');

        return redirect()->route('admins.forex-request');


    }

}
