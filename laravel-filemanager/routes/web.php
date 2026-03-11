<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('post/add', [PostController::class, 'add']);
// Route::post('post/store', [PostController::class, 'store']);
// Route::get('post/show', [PostController::class, 'show'])->name('post.show');


//  Route::group(['prefix' => 'laravel-filemanager'], function () {
//      \UniSharp\LaravelFilemanager\Lfm::routes();
//  });

Route::get('/', [ProductController::class, 'show']);
Route::get('cart/show', [CartController::class, 'show']);
Route::get('cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('cart/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');