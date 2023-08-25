<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// AUTH ROUTES
Route::middleware('redirectLoggedIn')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    });
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// HOME ROUTES
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
});
