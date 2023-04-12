<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Setting;
use Livewire\Component;

class Header extends Component
{
    public $menuIsOpen = false;
    public $logo;

    protected $listeners = ['logoChanged'];

    public function mount()
    {
        $this->logo = Setting::first()->logo;
    }

    public function logoChanged($logo)
    {
        $this->logo = $logo;
    }

    public function clickMenu()
    {
        $this->menuIsOpen = !$this->menuIsOpen;
    }

    public function render()
    {
        return view('livewire.dashboard.header')->layout('layouts.dashboard')->with('logo', $this->logo);
    }
}
