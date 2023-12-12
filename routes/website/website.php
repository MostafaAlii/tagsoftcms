<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
    /*Route::group(['prefix' => 'client', 'middleware' => 'auth'], function () {
        Route::get('dashboard', [Front\WebsiteController::class, 'index'])->name('user.dashboard');
        // Main Settings ::
    });*/

    Route::group(['middleware' => 'guest', 'as' => 'website.'], function () {
        Route::get('/', [Front\WebsiteController::class, 'index'])->name('home');
        // Main Settings ::
    });

    
     require dirname(__DIR__) .'/auth.php';
});