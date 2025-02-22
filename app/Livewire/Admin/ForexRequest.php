<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination; // Import WithPagination
use App\Models\MoneyForex;

class ForexRequest extends Component
{
    use WithPagination; // Include pagination support

    public $forexCount;
   

    public function mount()
    {
        $this->forexCount = MoneyForex::count();
    }

    public function render()
    {
        return view('livewire.admin.forex-request', [
            'Forexmoney' => MoneyForex::paginate(10) // Correct way to paginate
        ])->layout('Admin.layouts.app');
    }

    public function delete(MoneyForex $id)
    {
        $id->delete();

        session()->flash('message', 'Forex Request deleted successfully');

        // Reset pagination after deletion
        $this->resetPage();

        // Update count
        $this->forexCount = MoneyForex::count();
    }
}
