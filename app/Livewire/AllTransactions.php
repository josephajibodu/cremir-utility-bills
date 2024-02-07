<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class AllTransactions extends Component
{
    #[On('data-purchased')]
    public function reloadData(): array
    {
        dd('daving');
    }

    public function render()
    {
        return view('livewire.all-transactions');
    }
}
