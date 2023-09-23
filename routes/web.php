<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FileShareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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
Route::get('customers/search/{searchTerm}', [CustomerController::class, 'search']);

Route::resource('orders', OrderController::class);
Route::get('orders/search/{searchTerm}', [OrderController::class, 'search']);

Route::resource('users', UserController::class);
Route::get('users/search/{searchTerm}', [userController::class, 'search']);

Route::resource('products', ProductController::class);
Route::get('products/search/{searchTerm}', [ProductController::class, 'search']);

Route::resource('invoices', InvoiceController::class);
Route::get('invoices/search/{searchTerm}', [InvoiceController::class, 'search']);

Route::resource('fileShares', FileShareController::class);
Route::get('fileShares/search/{searchTerm}', [FileShareController::class, 'search']);

Route::resource('designs', DesignController::class);
Route::get('designs/search/{searchTerm}', [DesignController::class, 'search']);
