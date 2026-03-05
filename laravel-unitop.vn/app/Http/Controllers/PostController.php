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
                'title' => 'Tiêu đề 3',
                'description' => 'Mô tả ngắn 3',
                'content' => 'Nội dung 3',
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
        // $posts = DB::table('posts')->select('title')->get();
        // foreach ($posts as $post) {
        //     echo $post->title;
        //     echo "<br>";
        // }

        // $post = DB::table('posts')->where('id', 1)->first();
        // $post = DB::table('posts')->find(1);
        // echo $post->title;

        // echo DB::table('posts')->count();
        // echo "<br>";
        // echo DB::table('posts')->where('user_id', 1)->count();

        // echo DB::table('posts')->min('id') . "<br>";
        // echo DB::table('posts')->max('id') . "<br>";
        // echo DB::table('posts')->avg('id') . "<br>";

        // $posts = DB::table('posts')
        //             -> join('users', 'users.id', '=', 'posts.user_id')
        //             -> select('users.name', 'posts.*')
        //             -> get();

        // $posts = DB::table('posts')->where('user_id', 1)->get();
        // $posts = DB::table('posts')->where('user_id', '<', 2)->get();
        // $posts = DB::table('posts')->where('title', 'Like', '%2%')->get();

        // $posts = DB::table('posts')->where([
        //     ['title', 'Like', '%3%'],
        //     ['votes', '<>', '0']
        // ])->get();

        // $posts = DB::table('posts')
        //         ->where('id', 2)
        //         ->orWhere('votes', '<', 20)
        //         ->get();

        $posts = DB::table('posts')
                ->selectRaw("COUNT(id) as num_posts, user_id")
                ->groupBy('user_id')
                ->get();
        echo "<pre>";
        print_r($posts);
        echo "</pre>";
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
