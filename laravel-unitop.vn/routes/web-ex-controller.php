<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/post/create', [AdminPostController::class, 'create']);
Route::get('admin/post/show{id?}', [AdminPostController::class, 'show']);
Route::get('admin/post/update/{id}', [AdminPostController::class, 'update']);
Route::get('admin/post/delete/{id}', [AdminPostController::class, 'delete']);