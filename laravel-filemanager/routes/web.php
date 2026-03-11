<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/add', [PostController::class, 'add']);
Route::post('post/store', [PostController::class, 'store']);
Route::get('post/show', [PostController::class, 'show'])->name('post.show');


 Route::group(['prefix' => 'laravel-filemanager'], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });