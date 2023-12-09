<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Admin;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
    Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
        Route::get('dashboard', [Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        
        // Main Settings ::
        Route::controller(Admin\MainSettingsController::class)->prefix('mainSettings')->as('mainSettings.')->group(function() {
            Route::get('/', 'index')->name('index');
            Route::post('/store', 'store')->name('store');
        });
    });

    
     require dirname(__DIR__) .'/auth.php';
});