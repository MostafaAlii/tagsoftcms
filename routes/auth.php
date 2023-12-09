<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{/*Employee*/Admin};
// Admins ::
Route::middleware('guest:admin')->prefix('admin')->group(function () {
    Route::get('login', [Admin\AdminAuthenticatedSessionController::class, 'create'])->name('admin.login');
    Route::post('login', [Admin\AdminAuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::post('logout', [Admin\AdminAuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
});

// Employee ::
/*Route::middleware('guest:employee')->prefix('employee')->group(function () {
    Route::get('login', [Employee\EmployeeAuthenticatedSessionController::class, 'create'])->name('employee.login');
    Route::post('login', [Employee\EmployeeAuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:employee')->prefix('employee')->group(function () {
    Route::post('logout', [Employee\EmployeeAuthenticatedSessionController::class, 'destroy'])->name('employee.logout');
});*/