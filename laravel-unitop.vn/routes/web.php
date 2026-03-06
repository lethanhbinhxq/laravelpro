<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\FeaturedImageController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

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

// Route::get('child', function() {
//     // return view('child', ['data' => 'Lê Thanh Bình', 'html'=>'<strong>Lê Thanh Bình</strong>']);
//     return view('child', ['data' => 4]);
// });

// Route::get('for', function(){
//     return view('for', ['n'=>'20']);
// });

// Route::get('foreach', function(){
//     $users = array(
//         1 => array(
//             'name' => 'Lê Thanh Bình'
//         ),
//         2 => array(
//             'name' => 'Nguyễn Văn A'
//         ),
//         3 => array(
//             'name' => 'Trần Thị C'
//         )
//     );
//     return view('foreach', compact('users'));
// });

// Route::get('php', function(){
//     $users = array(
//         1 => array(
//             'name' => 'Lê Thanh Bình'
//         ),
//         2 => array(
//             'name' => 'Nguyễn Văn A'
//         ),
//         3 => array(
//             'name' => 'Trần Thị C'
//         )
//     );
//     return view('php', compact('users'));
// });

// Route::get('demo', function() {
//     return view('demo');
// });

// Route::get('child', function() {
//     return view('child', ['data'=>4, 'post_title'=>'Khóa học Laravel Pro']);
// });

// // ======= Exercise View =======
// Route::get('admin/post/show', [AdminPostController::class, 'show']);
// Route::get('admin/post/add', [AdminPostController::class, 'add']);
// Route::get('admin/post/update/{id}', [AdminPostController::class, 'update']);

// Route::get('users/insert', function(){
//     DB::table('users')->insert([
//         'name' => 'Thanh Bình Lê',
//         'email' => 'binhlt@chanchinh.vn',
//         'password' => bcrypt('X1@oq1ng'),

//     ]);
// });

// Route::get('posts/insert', [PostController::class, 'add']);
// Route::get('posts/show', [PostController::class, 'show']);
// Route::get('posts/update/{id}', [PostController::class, 'update']);
// Route::get('posts/delete/{id}', [PostController::class, 'delete']);

// ======= Exercise Migration =======

// Route::get('admin/product/add_category', [AdminProductController::class, 'add_category']);
// Route::get('admin/product/add', [AdminProductController::class, 'add']);
// Route::get('admin/product/show', [AdminProductController::class, 'show']);
// Route::get('admin/product/update/{id}', [AdminProductController::class, 'update']);
// Route::get('admin/product/delete/{id}', [AdminProductController::class, 'delete']);

// ======= Eloquent ORM =======
// Route::get('post/read', function(){
//     $posts = Post::all();
//     return $posts;
// });

Route::get('post/read', action: [PostController::class, 'read']);
Route::get('post/add', action: [PostController::class, 'add']);
Route::get('post/update/{id}', action: [PostController::class, 'update']);
Route::get('post/delete/{id}', action: [PostController::class, 'delete']);
Route::get('post/restore/{id}', action: [PostController::class, 'restore']);
Route::get('post/permanentlyDelete/{id}', action: [PostController::class, 'permanentlyDelete']);

Route::get('images/read', [FeaturedImageController::class, 'read']);

Route::get('role/show', [RoleController::class, 'show']);