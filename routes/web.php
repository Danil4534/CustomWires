<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\OneClickModalController;
use Illuminate\Support\Facades\Route;

Route::get("/", [NavController::class, 'getHomePage'])->name("page.Home");
Route::post('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('/removeFromCart', [CartController::class, 'removeFromCart'])->name('removeFromCart');
Route::get('/catalog', [NavController::class, 'getCatalogPage'])->name('page.catalog');
Route::get('/product/{productId?}', [NavController::class, 'getProductPage'])->name('page.productPage');
Route::post('/oneClickModal', [OneClickModalController::class, 'addProduct'])->name('addProductForOneClickModal');
Route::get('/quiz', [NavController::class, 'getQuizPage'])->name('page.Quiz');
Route::get('/checkout', [NavController::class, 'getCheckoutPage'])->name('page.checkout');
