<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use App\Traits\LaravelLocalizationTrait;
use Livewire\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class FloatingButtons extends Component
{

    use LaravelLocalizationTrait;

    public $laravelLocalization, $whatsapp;

    protected $listeners = ['changeLanguage'];

    public function mount()
    {
        $this->whatsapp = Setting::first()->whatsapp;
        $this->laravelLocalization = LaravelLocalization::class;
    }

    public function changeLanguage()
    {
        $lang = app()->getLocale() === 'ar' ? 'en' : 'ar';
        $url = $this->changeUrl($this->laravelLocalization, $lang);
        return redirect()->to($url);
    }
    public function render()
    {
        return view('livewire.floating-buttons');
    }
}
