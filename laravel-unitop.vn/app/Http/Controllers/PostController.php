<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
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
        // return redirect()->route('post.index');

        return view('post.create');
    }

    public function add()
    {
        // DB::table('posts')->insert(
        //     [
        //         'title' => 'Tiêu đề 3',
        //         'description' => 'Mô tả ngắn 3',
        //         'content' => 'Nội dung 3',
        //         'user_id' => 1,
        //     ]
        // );

        // $post = new Post();
        // $post->title = "Laravel Pro 1";
        // $post->content = "Content Laravel Pro 1";
        // $post->user_id = 1;
        // $post->votes = 20;
        // $post->save();

        // Post::create([
        //     'title' => "Create 1",
        //     'content' => "Content create 1",
        //     'user_id' => 1,
        //     'votes' => 43
        // ]);

        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:5|max:100',
            'content' => 'required',
        ], [
            'required' => ':attribute không được để trống',
            'min' => ':attribute có độ dài ít nhất :min ký tự',
            'max' => ':attribute có độ dài tối đa :min ký tự',
        ], [
            'title' => 'Tiêu đề',
            'content' => 'Nội dung'
        ]);
        $input = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file;
            // Lấy tên file
            $filename = $file->getClientOriginalName();
            // Lấy đuôi file
            echo $file->getClientOriginalExtension();
            // Lấy kích thước file
            echo $file->getSize();

            $file->move('public/uploads', $file->getClientOriginalName());
            $thumbnail = 'public/uploads/' . $filename;
            $input['thumbnail'] = $thumbnail;
        }
        // return $request->input();
        $input['user_id'] = 2;
        $input['votes'] = 100;
        Post::create($input);
        // return redirect('post/show');
        return redirect(route('post.show'))->with('status', 'Thêm bài viết thành công');
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

        // $posts = DB::table('posts')
        //         ->selectRaw("COUNT(id) as num_posts, user_id")
        //         ->groupBy('user_id')
        //         ->get();

        // $posts = DB::table('posts')
        //         // ->orderBy('votes')
        //         -> orderBy('votes', 'desc')
        //         ->get();

        // $posts = DB::table('posts')
        //         ->selectRaw("COUNT(id) as num_posts, user_id")
        //         ->groupBy('user_id')
        //         ->orderBy('num_posts', 'desc')
        //         ->get();

        // $posts = DB::table('posts')
        //         ->offset(2)
        //         ->limit(3)
        //         ->get();
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";

        // $posts = Post::all();
        // return view('post.index', compact("posts"));

        return redirect()->away('https://google.com');
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
    public function update($id)
    {
        //
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->update([
        //         'title' => 'Iphone 17'
        //     ]);

        // $post = Post::find($id);
        // $post->title = "Laravel Pro 2";
        // $post->content = "Content Laravel Pro 2";
        // $post->user_id = 1;
        // $post->votes = 40;
        // $post->save();

        $post = Post::find($id)
                    ->update([
                        'title' => 'Update',
                        'content' => 'Update Content',
                    ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->delete();

        // $post = Post::find($id);
        // $post->delete();

        // Post::where('user_id', 1)->delete();

        // Post::destroy($id);

        // Post::destroy([1, 2, 3]);

        $post = Post::find($id);
        $post->delete();
    }

    public function read() {
        // $posts = Post::all();

        // $posts = Post::where('user_id', 1)->get();
        // return $posts;

        // $post = Post::where('user_id', 1)->first();
        // $post = Post::find(1);
        // $posts = Post::find([2, 4]);

        // $posts = Post::orderBy('id', 'desc')->get();

        // $posts = Post::selectRaw("COUNT(id) as num_posts, user_id")
        //         ->groupBy('user_id')
        //         ->orderBy('num_posts', 'desc')
        //         ->get();

        // $posts = Post::limit(2)->get();
        // $posts = Post::limit(2)->offset(2)->get();

        // $posts = Post::withTrashed()->get();
        // $posts = Post::onlyTrashed()->get();
        // return $posts;

        // $img = Post::find(1)->FeaturedImage;
        // return $img;

        $user = Post::find(2)->user;

        $posts = User::find(1)->posts;
        return $posts;
    }

    function restore($id) {
        $posts = Post::onlyTrashed()
                    ->where('id', $id)
                    ->restore();

    }

    function permanentlyDelete($id) {
        Post::onlyTrashed()
            ->where('id', $id)
            ->forceDelete();
    }
}
