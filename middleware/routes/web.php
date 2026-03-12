<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('admin/{age}', function(){
//     return view('admin');
// })->middleware('CheckAge');

Route::get('admin/{age}', [AdminController::class, 'index']);
