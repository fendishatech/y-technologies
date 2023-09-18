<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
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

Route::resource('customers', CustomerController::class);

Route::resource('orders', OrderController::class);
Route::get('orders/search/{searchTerm}', [OrderController::class, 'search']);

Route::resource('users', UserController::class);

Route::resource('sales', SaleController::class);

Route::resource('store', StoreController::class);
