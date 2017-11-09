
<!--
 details.php
 概要：記事詳細画面
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>記事詳細</title>
    </head>
        <body>
            <p>タイトル：<br>{{ $post->title }}<br></p>
            <p>Details：<br>{{ $post->content }}</p>
            <br>
            {{ link_to_route('posts.List', 'Listに移動')}}
        </body>
</html>