<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', LoginController::class);


    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', RegistrationController::class);
});

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard.index')->name('dashboard');
    Route::post('/logout', LogoutController::class)->name('logout');
});

Route::get('{business:slug}', [App\Http\Controllers\BusinessController::class, 'show'])->name('businesses.show');
