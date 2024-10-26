<?php

use Illuminate\Support\Facades\Route;
Route::prefix('api')->group(function () {
    Route::prefix('permissions')->group(function () {
        Route::get('/', function () {
            return 'permission api module';
        });
    });
});
