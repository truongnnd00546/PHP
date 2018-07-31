<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body id="demo">
<input type="text" id="mykeyword">
<input type="button" value="Load data" id="btn-submit">
<div id="data"></div>
<script>

    $('#btn-submit').click(function () {
        var keyword = $('#mykeyword').val();
        var YOUTUBE_API = "https://content.googleapis.com/youtube/v3/search?q=" + keyword + "&type=video&maxResults=9&part=snippet&key=AIzaSyAwUjk3CwtXCiB_W6Xi0colfOKPgm90hHc";
        $.ajax({
            url: YOUTUBE_API,
            method:'GET',
            success:function (response) {
                var html = '';
                for (var i = 0; i < response.items.length; i++) {
                    var item = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' +response.items[i].id.videoId+ '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                    html+=item;
                }
                $('#data').html(html);
            },
            error:function () {
                alert('error');
            }
        });
    });
</script>
</body>
</html>