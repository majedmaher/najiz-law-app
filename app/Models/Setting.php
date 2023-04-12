<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory;

    use HasTranslations;
    public $translatable = ['main_title', 'description_main', 'who_are_we_title', 'description_who_are_we', 'description_footer', 'address', 'worktime', 'keywords', 'description'];

    protected $guarded = [];
}
