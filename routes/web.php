<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('products')->group(function () {
    Route::get('/category', [ProductController::class, 'products'])->name('products');
    Route::get('/category/food-beverage', [ProductController::class, 'foodAndBeverage'])->name('products.food');
    Route::get('/category/beauty-health', [ProductController::class, 'beautyAndHealth'])->name('products.beauty');
    Route::get('/category/home-care', [ProductController::class, 'homeCare'])->name('products.home');
    Route::get('/category/baby-kid', [ProductController::class, 'babyAndKid'])->name('products.baby');
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.show');

Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');