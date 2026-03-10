<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/00l9mte9oevy90w9i5vhjv1vhbtlwbe0y07rbncfhtqa2gy4/tinymce/5/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>Thêm bài viết</h1>
        {!! Form::open(['url' => 'post/store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Tiêu đề']) !!}
            @error('title')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'Nội dung']) !!}
            @error('content')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <tinymce-editor api-key="00l9mte9oevy90w9i5vhjv1vhbtlwbe0y07rbncfhtqa2gy4" height="500" menubar="false" plugins="preview importcss searchreplace autolink autosave
      save directionality code visualblocks visualchars fullscreen image
      link media codesample table charmap pagebreak nonbreaking anchor
      insertdatetime advlist lists wordcount help charmap quickbars emoticons
      accordion markdown math importword exportword exportpdf" toolbar="undo redo | accordion accordionremove | importword exportword exportpdf |
      math | blocks fontfamily fontsize | bold italic underline strikethrough |
      align numlist bullist | link image | table media | lineheight outdent indent |
      forecolor backcolor removeformat | charmap emoticons |
      code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl"
            menubar="file edit view insert format tools table help'" content_style="body
      {
        font-family:Helvetica,Arial,sans-serif;
        font-size:14px
      }">
        </tinymce-editor>

        <div class="form-group">
            {!! Form::file('file', ['class' => 'form-control-file']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Thêm mới', ['name' => 'sm-add', 'class' => 'btn btn-dark']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-webcomponent/dist/tinymce-webcomponent.min.js"></script>

</body>

</html>