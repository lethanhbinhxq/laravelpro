<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/product/show/{id}', [ProductController::class, 'show']);
// Route::get('/product/create', [ProductController::class, 'create']);
// Route::get('/product/update/{id}', [ProductController::class, 'update']);

Route::resource('post', PostController::class);