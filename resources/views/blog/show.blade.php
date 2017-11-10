
<!--
 show.php
 概要：記事詳細画面
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>記事詳細</title>
    </head>
        <body>
        <p>title|<br>{{ $post->title }}<br></p>
        <p>content|<br>{{ $post->content }}</p>
        </table>
        <a href="{{ action('PostsController@index') }}">記事一覧画面へ</a>    
        </body>
</html>