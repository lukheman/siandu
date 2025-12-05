<?php

namespace App\Livewire;

use App\Models\Balita;
use App\Models\IbuHamil;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Dashboard extends Component
{
    public $user;
    public $totalBalita;
    public $totalIbuHamil;

    public function mount()
    {
        $this->user = auth()->user();
        $this->totalBalita   = Balita::count();
        $this->totalIbuHamil = IbuHamil::count();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
