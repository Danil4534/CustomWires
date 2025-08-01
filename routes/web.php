<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Route;

Route::get("/", [NavController::class, 'getHomePage'])->name("page.Home");
Route::post('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('/removeFromCart', [CartController::class, 'removeFromCart'])->name('removeFromCart');
