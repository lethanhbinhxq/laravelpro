<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Trang danh sách bài viết</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="">{{ $post->title }}</a>
                <p>{!!$post->content!!}</p>
                <img src="{{ asset($post->thumbnail) }}" alt="">
            </li>
        @endforeach

    </ul>

    {{ $posts->appends(['sort'=>'votes'])->links() }}
</body>

</html>