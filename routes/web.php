<?php

use App\Http\Controllers\FrontendController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard\Clients;
use App\Http\Livewire\Dashboard\Licenses;
use App\Http\Livewire\Dashboard\Services;
use App\Http\Livewire\Dashboard\Settings;
use App\Http\Livewire\Main;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('main');
// });


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/', Main::class)->name('main');

        Route::group(['middleware' => 'guest'], function () {
            Route::get('/login', Login::class)->name('login');
        });

        Route::group(['middleware' => 'auth', 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
            Route::get('settings', Settings::class)->name('settings');
            Route::get('services', Services::class)->name('services');
            Route::get('clients', Clients::class)->name('clients');
            Route::get('licenses', Licenses::class)->name('licenses');
        });

        Route::get('/a', function () {
            return Service::latest()->paginate(2);
        });
    }
);
