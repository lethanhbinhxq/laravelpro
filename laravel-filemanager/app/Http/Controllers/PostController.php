<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function add()
    {
        return view('post.create');
    }

    function store(Request $request)
    {
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

    function show() {
        $posts = Post::paginate(5);
        return view('post.index', compact("posts"));
    }
}
