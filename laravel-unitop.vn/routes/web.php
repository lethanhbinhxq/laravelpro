<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/product/show/{id}', [ProductController::class, 'show']);
// Route::get('/product/create', [ProductController::class, 'create']);
// Route::get('/product/update/{id}', [ProductController::class, 'update']);

// Route::resource('post', PostController::class);

// Route::get('admin/post/create', [AdminPostController::class, 'create']);
// Route::get('admin/post/show/{id?}', [AdminPostController::class, 'show']);
// Route::get('admin/post/update/{id}', [AdminPostController::class, 'update']);
// Route::get('admin/post/delete/{id}', [AdminPostController::class, 'delete']);

Route::get('child', function() {
    // return view('child', ['data' => 'Lê Thanh Bình', 'html'=>'<strong>Lê Thanh Bình</strong>']);
    return view('child', ['data' => 4]);
});