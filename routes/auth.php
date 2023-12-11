<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{/*Employee*/Admin};
use App\Http\Controllers\Auth;
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

Route::middleware('guest')->group(function () {
    Route::get('login', [Auth\AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [Auth\AuthenticatedSessionController::class, 'store']);
    Route::get('register', [Auth\RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [Auth\RegisteredUserController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', Auth\EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', Auth\VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('email/verification-notification', [Auth\EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');
    Route::post('logout', [Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');
});