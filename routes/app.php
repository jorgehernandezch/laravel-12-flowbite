<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\PagesController;

Route::prefix('app')->name('app.')->group(function () {
   // Individual pages
   Route::get('/', [PagesController::class, 'index'])->name('index');
   Route::get('/settings', [PagesController::class, 'settings'])->name('settings');
   Route::get('/profile', [PagesController::class, 'profile'])->name('profile');
   Route::get('/notifications', [PagesController::class, 'notifications'])->name('notifications');

   //Auth routes
   Route::prefix('auth')->group(function () {
      Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');
      Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])
         ->name('verification.verify');
      Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
         ->middleware('throttle:6,1')
         ->name('verification.send');
      Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
      Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
      Route::put('password', [PasswordController::class, 'update'])->name('password.update');
      Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
   });
});
