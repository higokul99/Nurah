<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/collections', [PageController::class, 'collection'])->name('collection');
Route::get('/products', [PageController::class, 'collection'])->name('products');
Route::get('/all-products', [PageController::class, 'allProducts'])->name('all-products');
Route::get('/cosmopolitan', [PageController::class, 'cosmopolitan'])->name('cosmopolitan');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Auth Routes
    Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    // Protected Routes
    Route::middleware('auth')->group(function () {
        Route::view('/', 'admin.dashboard')->name('dashboard');
    });
});

// Fallback for auth middleware if 'login' route is missing
Route::get('/login', function() {
    return redirect()->route('admin.login');
})->name('login');
