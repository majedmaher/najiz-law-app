<?php

// function changeUrl($laravelLocalization, $lang)
// {
//     app()->setLocale($lang);
//     $url = $laravelLocalization::getNonLocalizedURL(url()->previous());
//     return $url . app()->getLocale();
// }

// function saveImage($photo, $folder)
// {
//     $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
//     $photo->move('uploads/' . $folder, $name_gen);
//     $save_url = 'uploads/' . $folder . '/' . $name_gen;
//     return $save_url;
// }


function saveImage($photo, $folder)
{
    $image = $photo->getClientOriginalName(); //Name with extension 'filename.jpg'
    $name = explode('.', $image)[0]; // Filename 'filename'

    $fileName = $name . uniqid() . '.' . $photo->getClientOriginalExtension();
    $photo->storeAs($folder, $fileName, 'uploads');
    return 'uploads/' . $folder . '/' . $fileName;
}
