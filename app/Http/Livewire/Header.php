<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Header extends Component
{
    public $menuIsOpen = false;
    public $logo;

    public function mount()
    {
        $this->logo = Setting::first()->logo;
    }

    public function clickMenu()
    {
        $this->menuIsOpen = !$this->menuIsOpen;
    }

    public function render()
    {
        return view('livewire.header')->layout('main');
    }
}
