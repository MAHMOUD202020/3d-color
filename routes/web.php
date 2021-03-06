<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Web\Auth\LoginController;
use \App\Http\Controllers\Web\Auth\RegisterController;
use \App\Http\Controllers\Web\Auth\ForgotPasswordController;
use \App\Http\Controllers\Web\Auth\ResetPasswordController;
use \App\Http\Controllers\Web\Auth\ConfirmPasswordController;


//// Login
//Route::get('login', [LoginController::class , 'showLoginForm'])->name('login');
//Route::post('login',  [LoginController::class , 'login']);
//Route::any('logout',  [LoginController::class , 'logout'])->name('logout');
//
//// Register
//Route::get('register', [RegisterController::class,'showRegistrationForm'])->name('register');
//Route::post('register', [RegisterController::class,'register']);
//
//
//// Reset Password
//Route::get('password/reset', [ForgotPasswordController::class , 'showLinkRequestForm'])->name('password.request');
//Route::post('password/email', [ForgotPasswordController::class , 'sendResetLinkEmail'])->name('password.email');
//Route::get('password/reset/{token}', [ResetPasswordController::class , 'showResetForm'])->name('password.reset');
//Route::post('password/reset',  [ResetPasswordController::class , 'reset'])->name('password.update');
//
//// Confirm Password
//Route::get('password/confirm', [ConfirmPasswordController::class,'showConfirmForm'])->name('password.confirm');
//Route::post('password/confirm', [ConfirmPasswordController::class,'confirm']);


// Verify Email
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

 Route::redirect('' , 'student/login');
