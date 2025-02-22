<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination; // Import WithPagination
use App\Models\Sellsforex;

class SellRequest extends Component
{
    use WithPagination;

    public $sellforex;
    public function mount()
    {
      $this->sellforex =Sellsforex::all();
    }

    public function render()
    {
        return view('livewire.admin.sell-request',[
            'Forexmoney' => Sellsforex::paginate(10) // Correct way to paginate
        ])
        ->layout('Admin.layouts.app');
    }
    public function delete(Sellsforex $id)
    {
        $id->delete();

        session()->flash('message', 'Forex Request deleted successfully');

        // Reset pagination after deletion
        $this->resetPage();

        // Update count
        $this->forexCount = Sellsforex::count();
    }
}
