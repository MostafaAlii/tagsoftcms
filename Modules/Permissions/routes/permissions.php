<?php

use Illuminate\Support\Facades\Route;

Route::prefix('permissions')->group(function () {
    Route::get('/', function () {
        return 'permission module';
    });
});
