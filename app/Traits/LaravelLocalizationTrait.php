<?php

namespace App\Traits;

trait LaravelLocalizationTrait
{
    public function changeUrl($laravelLocalization, $lang)
    {
        app()->setLocale($lang);
        $url = $laravelLocalization::getLocalizedURL($lang, url()->previous());
        return $url;
    }
}
