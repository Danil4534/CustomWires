<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\OneClickModalController;
use Illuminate\Support\Facades\Route;

Route::get("/", [NavController::class, 'getHomePage'])->name("page.Home");
Route::post('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('/removeFromCart', [CartController::class, 'removeFromCart'])->name('removeFromCart');
Route::get('/catalog',  [NavController::class, 'getCatalogPage'])->name('page.catalog');
Route::get('/product/{productId?}', [NavController::class, 'getProductPage'])->name('page.productPage');
Route::post('/oneClickModal', [OneClickModalController::class, 'addProductOneClick'])->name('addProductForOneClickModal');
Route::get('/quiz', [NavController::class, 'getQuizPage'])->name('page.Quiz');
Route::get('/checkout', [NavController::class, 'getCheckoutPage'])->name('page.checkout');
Route::get('/calculator', [NavController::class, 'getCalculatorPage'])->name('page.calculator');
Route::post('/oneClickSuccess', [OneClickModalController::class, 'orderProduct'])->name('orderProduct');
Route::get("/page-list", [NavController::class, 'getPageList'])->name("page.List");
