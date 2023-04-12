<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public $logo, $logo_img, $img, $main_title_ar, $main_title_en, $main_description_ar, $main_description_en, $who_are_we_title_ar, $who_are_we_title_en, $image_who_ar_we, $description_who_are_we_ar, $description_who_are_we_en, $description_footer_ar, $description_footer_en, $whatsapp, $twitter, $linkedin, $address_ar, $address_en, $phone_number, $email_address, $worktime_ar, $worktime_en, $latitude, $longitude, $keywords_ar, $keywords_en, $description_ar, $description_en;


    public function updateSetting()
    {
        $this->validate([
            'main_title_ar' => 'string|required',
            'main_title_en' => 'string|required',
            'main_description_ar' => 'string|required',
            'main_description_en' => 'string|required',
            'who_are_we_title_ar' => 'string|required',
            'who_are_we_title_en' => 'string|required',
            'phone_number' => 'string|required',
            'email_address' => 'string|required|email',
            'worktime_ar' => 'string|required',
            'worktime_en' => 'string|required',
            'latitude' => 'string|required',
            'longitude' => 'string|required',
        ]);
        $setting = Setting::first();

        if ($this->logo) {
            $setting->logo = saveImage($this->logo, 'logo');
        }
        if ($this->image_who_ar_we) {
            $setting->image_who_ar_we = saveImage($this->image_who_ar_we, 'image-who-ar-we');
        }

        $setting->setTranslations('main_title', ['ar' => $this->main_title_ar, 'en' => $this->main_title_en]);
        $setting->setTranslations('description_main', ['ar' => $this->main_description_ar, 'en' => $this->main_description_en]);
        $setting->setTranslations('who_are_we_title', ['ar' => $this->who_are_we_title_ar, 'en' => $this->who_are_we_title_en]);
        $setting->setTranslations('description_who_are_we', ['ar' => $this->description_who_are_we_ar, 'en' => $this->description_who_are_we_en]);
        $setting->setTranslations('description_footer', ['ar' => $this->description_footer_ar, 'en' => $this->description_footer_en]);
        $setting->whatsapp = $this->whatsapp;
        $setting->twitter = $this->twitter;
        $setting->linkedin = $this->linkedin;
        $setting->setTranslations('address', ['ar' => $this->address_ar, 'en' => $this->address_en]);
        $setting->phone_number = $this->phone_number;
        $setting->email_address = $this->email_address;
        $setting->setTranslations('worktime', ['ar' => $this->worktime_ar, 'en' => $this->worktime_en]);
        $setting->latitude = $this->latitude;
        $setting->longitude = $this->longitude;
        $setting->setTranslations('keywords', ['ar' => $this->keywords_ar, 'en' => $this->keywords_en]);
        $setting->setTranslations('description', ['ar' => $this->description_ar, 'en' => $this->description_en]);

        $setting->update();
        $this->emit('logoChanged', $setting->logo);
        $this->emit('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $setting = Setting::first();
        $this->main_title_ar = $setting->getTranslation('main_title', 'ar');
        $this->main_title_en = $setting->getTranslation('main_title', 'en');
        $this->logo_img = $setting->logo;
        $this->img = $setting->image_who_ar_we;
        $this->main_description_ar = $setting->getTranslation('description_main', 'ar');
        $this->main_description_en = $setting->getTranslation('description_main', 'en');
        $this->who_are_we_title_ar = $setting->getTranslation('who_are_we_title', 'ar');
        $this->who_are_we_title_en = $setting->getTranslation('who_are_we_title', 'en');
        $this->description_who_are_we_ar = $setting->getTranslation('description_who_are_we', 'ar');
        $this->description_who_are_we_en = $setting->getTranslation('description_who_are_we', 'en');
        $this->description_footer_ar = $setting->getTranslation('description_footer', 'ar');
        $this->description_footer_en = $setting->getTranslation('description_footer', 'en');
        $this->whatsapp = $setting->whatsapp;
        $this->twitter = $setting->twitter;
        $this->linkedin = $setting->linkedin;
        $this->address_ar = $setting->getTranslation('address', 'ar');
        $this->address_en = $setting->getTranslation('address', 'en');
        $this->phone_number = $setting->phone_number;
        $this->email_address = $setting->email_address;
        $this->worktime_ar = $setting->getTranslation('worktime', 'ar');
        $this->worktime_en = $setting->getTranslation('worktime', 'en');
        $this->latitude = $setting->latitude;
        $this->longitude = $setting->longitude;
        $this->keywords_ar = $setting->getTranslation('keywords', 'ar');
        $this->keywords_en = $setting->getTranslation('keywords', 'en');
        $this->description_ar = $setting->getTranslation('description', 'ar');
        $this->description_en = $setting->getTranslation('description', 'en');
        return view('livewire.dashboard.settings')->layout('layouts/dashboard');
    }
}
