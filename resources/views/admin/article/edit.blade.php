<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    input[type=text]{
        padding:5px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=submit] {
        width: 80px;
        background-color: #4CAF50;
        color: white;
        padding: 5px;
        margin: 5px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=reset] {
        width: 80px;
        background-color: #ff0111;
        color: white;
        padding: 5px;
        margin: 5px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[name=content]{
        margin-left: 68px;
    }
    select[name=author]{
        margin-left: 39px;
    }
    input[name=images]{
        margin-left: 59px;
    }
    .item1{
        margin-left: 60px;
    }
    h2{
        margin-left: 50px;
    }
    form{
        margin-top: 20px;
    }
</style>
<body>
    <h1>Category article</h1>
    <ul>
        <li>
            <a href="/admin/article/create">Create New</a>
        </li>
        <li>
            <a href="/admin/article">List</a>
        </li>
    </ul>
    <form action="/admin/article/{{$obj -> id}}" method="post">
        @method('PUT')
        {{csrf_field()}}
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{$obj -> name}}">
        </div>
        <div>
            <label>Author</label>
            <input type="text" name="author" value="{{$obj -> author}}">
        </div>
        <div>
            <label>Content</label>
            <input type="text" name="content" value="{{$obj -> content}}">
        </div>
        <div>
            <label>Image</label>
            <input type="text" name="images" value="{{$obj-> images}}">
        </div>
        <div class="item1">
            <input class="btn btn-success" type="submit" value="Save">
            <input class="btn btn-danger" type="reset" value="Reset">
        </div>
    </form>
</body>
</html>