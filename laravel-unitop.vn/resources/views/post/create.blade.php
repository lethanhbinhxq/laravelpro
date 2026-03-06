<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Thêm bài viết</h1>
        <form action="post/add" method="POST">
            <div class="form-group">
                <input type="text" name="title" placeholder="Tiêu đề" class="form-control">
            </div>
            <div class="form-group">
                <textarea name="content" id="content" placeholder="Nội dung" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" name="sm-add">
            </div>
        </form>
    </div>
</body>

</html>