<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/collections', [PageController::class, 'collection'])->name('collection');
Route::get('/product', [PageController::class, 'product'])->name('product');
