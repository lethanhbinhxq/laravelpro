<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

/*
 * Tạo cấu trúc url của trang quản lý bài viết trong admin
 * --- Trang thêm bài viết
 * --- Trang danh sách bài viết
 * --- Trang cập nhật bài viết
 * --- Trang xóa bài viết
 */

Route::get('/admin/post/show/{id?}', function($id=0) {
    if ($id) return "Admin: Chi tiết bài viết có id: {$id}";
    return "Admin: Danh sách bài viết";
});

Route::get('/admin/post/add', function() {
    return "Admin: Thêm bài viết";
});

Route::get('/admin/post/update/{id}', function($id) {
    return "Admin: Cập nhật bài viết có id: {$id}";
});

Route::get('/admin/post/delete/{id}', function($id) {
    return "Admin: Xóa bài viết có id: {$id}";
});