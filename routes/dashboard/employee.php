<?php
use App\Http\Controllers\Dashboard\Employee;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::group(['prefix' => 'employee','middleware' => 'auth:employee'], function () {
            Route::get('dashboard', [Employee\EmployeeDashboardController::class, 'index'])->name('employee.dashboard');
        });
    });