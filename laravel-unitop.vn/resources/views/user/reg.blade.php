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
        <h1>Đăng ký</h1>
        {!! Form::open(['url'=>'user/store', 'method'=>'POST']) !!}
            <div class="form-group">
                {!! Form::label('username', 'Tên đăng nhập') !!}
                {!! Form::text('username', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Mật khẩu') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Đăng ký', ['name'=>'sm-reg', 'class'=>'btn btn-dark']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</body>

</html>