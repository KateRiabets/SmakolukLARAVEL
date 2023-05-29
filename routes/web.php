<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CartController;



Route::middleware(['web'])->group(function () {

    Route::post('/submit-order', [CartController::class, 'submitOrder']);
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
    Route::get('/why', [WhyController::class, 'index'])->name('why');
    Route::get('/store', [StoreController::class, 'index'])->name('store');
    Route::post('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/update-cart', [CartController::class, 'updateCart']);
    Route::post('/product/add-to-cart/{product}', [CartController::class, 'add'])->name('add-to-cart');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/increase-quantity/{product}', [CartController::class, 'increase'])->name('increase-quantity');
    Route::post('/decrease-quantity/{product}', [CartController::class, 'decrease'])->name('decrease-quantity');


    Route::get('/cart-counter', [ProductController::class, 'CartCounter'])->name('cart.counter');


    // Move these routes after the more specific routes


    Route::get('/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::post('/{product}', [ProductController::class, 'store'])->name('product.store');
    Route::get('/{product}/comments', [CommentController::class, 'index'])->name('product.comments');
    Route::post('/{product}/comments', [CommentController::class, 'store'])->name('product.comments.store');
















});
