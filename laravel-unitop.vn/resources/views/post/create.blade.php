<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Thêm bài viết</h1>
        {!! Form::open(['url'=>'post/store', 'method'=>'GET']) !!}
            <div class="form-group">
                {!! Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Tiêu đề']) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('content', '', ['class'=>'form-control', 'placeholder'=>'Nội dung']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Thêm mới', ['name'=>'sm-add', 'class'=>'btn btn-dark']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</body>

</html>