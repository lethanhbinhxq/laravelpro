<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Định tuyến cơ bản
Route::get('/post', function(){
    return "Đây là trang bài viết";
});

Route::get('/admin/product', function(){
    return "Trang quản lý sản phẩm";
});

// Định tuyến có tham số
// Route::get('/post/{id}', function($id){
//     return $id;
// });

Route::get('/post/{cat_id}/page/{page}', function($cat_id, $page){
    return $cat_id . ' - ' . $page;
});

// Đặt tên định tuyến
Route::get('/users/profile', function(){
    return route("profile");
}) -> name('profile');

Route::get('/admin/product/add', function(){
    return route(name: "product.add");
}) -> name('product.add');

// Định tuyến có tham số tùy chọn
 // domain.com/users => Hiển thị danh sách users
 // domain.com/users/4 => Hiển thị thông tin của người dùng có id = 4
 Route::get('/users/{id?}', function($id = 0){
    return $id;
});

// Định tuyến với tham số có ràng buộc biểu thức chính quy
// Route::get('/product/{id}', function($id) {
//     return $id;
// }) -> where('id', '[0-9]+');

Route::get('/product/{slug}/{id}', function($slug, $id) {
    return $id . " --- " . $slug;
});

// Định tuyến qua một view
// domain.com/welcome => view welcome
Route::view("/welcome", "welcome");
Route::view("/post", "post", ['id' => 20]);

// Định tuyến qua controller
Route::get('/post/{id}', [PostController::class, 'detail']);