<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Licenses;
use App\Models\Service;
use App\Models\Setting;
use Livewire\Component;

class Main extends Component
{
    public $logo, $main_title, $main_description, $who_are_we_title, $image_who_ar_we, $description_who_are_we, $description_footer, $whatsapp, $twitter, $linkedin, $address, $phone_number, $email_address, $worktime, $latitude, $longitude, $keywords, $description;

    public $services, $clients, $licenses;

    public function mount()
    {
        $setting = Setting::first();
        $this->logo = $setting->logo;
        $this->main_title = $setting->main_title;
        $this->main_description = $setting->description_main;
        $this->who_are_we_title = $setting->who_are_we_title;
        $this->image_who_ar_we = $setting->image_who_ar_we;
        $this->description_who_are_we = $setting->description_who_are_we;

        $this->description_footer = $setting->description_footer;
        $this->twitter = $setting->twitter;
        $this->linkedin = $setting->linkedin;
        $this->address = $setting->address;
        $this->phone_number = $setting->phone_number;
        $this->email_address = $setting->email_address;
        $this->worktime = $setting->worktime;
        $this->latitude = $setting->latitude;
        $this->longitude = $setting->longitude;

        $this->keywords = $setting->keywords;
        $this->description = $setting->description;

        $this->services = Service::orderByDesc('id')->take(6)->get();
        $this->clients = Client::orderByDesc('id')->get();
        $this->licenses = Licenses::orderByDesc('id')->take(4)->get();
    }

    public function render()
    {
        return view('livewire.main')->layout('main', ['logo' => $this->logo, 'main_title' => $this->main_title, 'main_description' => $this->main_description, 'who_are_we_title' => $this->who_are_we_title, 'image_who_ar_we' => $this->image_who_ar_we, 'description_who_are_we' => $this->description_who_are_we, 'description_who_are_we' => $this->description_who_are_we, 'description_footer' => $this->description_footer, 'whatsapp' => $this->whatsapp, 'twitter' => $this->twitter, 'linkedin' => $this->linkedin, 'address' => $this->address, 'phone_number' => $this->phone_number, 'email_address' => $this->email_address, 'worktime' => $this->worktime, 'latitude' => $this->latitude, 'longitude' => $this->longitude, 'description' => $this->description, 'keywords' => $this->keywords]);
    }
}
