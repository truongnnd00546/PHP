<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
    <style>
       .button-card{
        background-color: #9fcdff;
        border: none;
    }
        .item1:hover{
        opacity: 0.5;
    }
        .item2{
            margin-left: 100px;
            margin-top: 20px;
        }
        a{
            border: 2px solid #062c33;
            background-color: #062c33;
            color: white;
        }
</style>
<body>
<h1>LIST PRODUCT</h1>
<ul>
    @foreach($list_obj as $item)
           <div class="col-3">
               <h6 class="text-center" href="/admin/article/{{$item -> id}}">{{$item -> name}}</h6>
               <img class="item1" width="350px" height="200px" src="{{ $item -> images }}" alt="">
               <div class="item2">
                   <a class="text-center" href="/admin/article/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;
                   <a  href="#/admin/article/{{$item -> id}}" id="{{$item -> id}}" class="btn-delete">Delete</a>
               </div>
           </div>
    @endforeach
</ul>
<script>
    $('.btn-delete').click(function () {
        var cateId = this.id;
        var user_confirm = confirm('Are you sure?');
        if (user_confirm) {
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/article/' + cateId,
                method: 'DELETE',
                data: {
                    '_token':"{{csrf_token()}}"
                },
                success: function () {
                    alert('Success');
                    window.location.reload();
                },
                error: function () {
                    alert('error');
                }
            });
        } else {
            alert('!Okie');
        }
    });
</script>
</body>
</html>