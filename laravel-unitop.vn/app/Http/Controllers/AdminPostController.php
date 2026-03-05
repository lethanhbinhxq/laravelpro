<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/*
 * Tạo controller quản lý bài viết trong admin và định tuyến đến nó
 * --- Trang thêm bài viết
 * --- Trang danh sách bài viết
 * --- Trang cập nhật bài viết
 * --- Trang xóa bài viết
 */
class AdminPostController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        //
        // return "Admin: Thêm bài viết";
        return view('admin.post.add');
    }

    /**
     * Display the specified resource.
     */
    public function show($id=0)
    {
        //
        // if ($id) return "Admin: Chi tiết bài viết có id: {$id}";
        // return "Admin: Danh sách bài viết";
        return view('admin.post.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update($id)
    {
        //
        // return "Admin: Cập nhật bài viết có id: {$id}";
        return view('admin.post.update', compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //
        return "Admin: Xóa bài viết có id: {$id}";
    }
}
