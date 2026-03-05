<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "Danh sách bài viết";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // return "Thêm bài viết";

        // Xử lý thêm dữ liệu
        // return redirect('post');
        return redirect()->route('post.index');
    }

    public function add()
    {
        DB::table('posts')->insert(
            [
                'title' => 'Tiêu đề',
                'description' => 'Mô tả ngắn',
                'content' => 'Nội dung',
                'user_id' => 1,
            ]
        );
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        // return "Hiển thị bài viết";
        // $posts = DB::table('posts')->get();
        // $posts = DB::table('posts')->select('title');
        // foreach ($posts as $post) {
        //     echo $post->title;
        //     echo "<br>";
        // }

        $post = DB::table('posts')->where('id', 1)->first();
        echo $post->title;
        // print_r($post);
        // return $posts;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
