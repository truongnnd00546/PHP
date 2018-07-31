<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List Category</h1>
    <ul>
        <li>
            <a href="/admin/category/create">Create New</a>
        </li>
        <li>
            <a href="/admin/category/list">List Category</a>
        </li>
    </ul>
    {{--<ul>--}}
        {{--@foreach($list_obj as $item)--}}
            {{--<li>--}}
                {{--<a href="/admin/category/{{$item -> id}}">{{$item -> name}}</a>--}}
                {{--<img src="{{$item -> images}}" alt="" style="width: 100px; border-radius: 50%">--}}
                {{--<a href="/admin/category/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;--}}
                {{--<span class="btn-delete" id="{{$item-> id}}">Delete With Ajax</span>--}}
            {{--</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
    {{--This message has been removed.--}}
    <h1>Product list</h1>
    <ul>
        @foreach($list_obj as $item)
            <li>
                <img src="{{$item->image}}" alt="" style="width: 150px">
                {{$item->name}}
                (<a href="/admin/category/{{$item->id}}/edit">Sửa</a>&nbsp;|&nbsp;
                <a href="{{$item->id}}" class="btn-delete">Xoá</a>)
            </li>
        @endforeach
    </ul>
    <script>
        $('.btn-delete').click(function () {
            var cateId = $(this).attr('href');
            alert(cateId);
            var user_confirm = confirm('Are you sure?');
            if(user_confirm){
                $.ajax({
                    url: 'http://localhost:8000/admin/category/' + cateId,
                    method:'DELETE',
                    data: {
                        '_token': "{{ csrf_token() }}"
                    },
                    success:function (response) {
                        alert('Xoa thanh cong');
                        window.location.reload();
                    },
                    error:function () {
                        alert('error');
                    }
                });
            }else{
                alert('!Okie');
            }
        });
    </script>
    {{--<script>--}}

        {{--var listDeleteButton = document.getElementsByClassName('btn-delete');--}}
        {{--for (var i = 0; i < listDeleteButton.length; i++) {--}}
            {{--listDeleteButton[i].onclick = function () {--}}
                {{--if(confirm('Are you sure ?')){--}}
                    {{--var params = '_token={{csrf_token()}}';--}}
                    {{--var currentId = this.id;--}}
                    {{--var xhttp = new XMLHttpRequest();--}}
                    {{--xhttp.open("DELETE", "/admin/category/" + currentId, true);--}}
                    {{--xhttp.onreadystatechange = function() {--}}
                        {{--if (this.readyState == 4 && this.status == 200) {--}}
                            {{--alert('Delete success!');--}}
                            {{--window.location.reload();--}}
                        {{--}--}}
                    {{--};--}}
                    {{--xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");--}}
                    {{--xhttp.send(params);--}}
                {{--}--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}
</body>
</html>