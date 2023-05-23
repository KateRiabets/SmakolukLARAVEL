<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('/why', [WhyController::class, 'index'])->name('why');
Route::get('/store', [StoreController::class, 'index'])->name('store');

Route::get('/{product}', [ProductController::class, 'show'])->name('product.show');


Route::get('/{product}/comments', [CommentController::class, 'index'])->name('product.comments');
Route::post('/{product}/comments', [CommentController::class, 'store'])->name('product.comments.store');
Route::post('/{product}', [ProductController::class, 'store'])->name('product.store');
