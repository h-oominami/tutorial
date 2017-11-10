
<!--
 list.php
 概要：記事一覧画面
 @extends('layouts.app')
-->


<!DOCTYPE html>
<html>
    <!--
    <head>
        <meta charset="UTF-8">
        <title>記事一覧</title>
    </head>
    -->
        <body>
            <div id="list story" class="table" >
                <div class="days">
                <h2>記事一覧</h2>
                <th>番号</th>
                <th>タイトル</th>
                <th>コンテンツ</th>
                <table border="1" cellspacing="0" cellpadding="1">
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
	                <td>{{$post->content}}</td>
                </tr>
                @endforeach
                <a href="{{ action('PostsController@show', $post->title, [$post->id]) }}">記事詳細画面へ</a>
                <a href="{{ action('PostsController@create') }}">記事作成画面へ</a>           
         </body>
    </table>
</html>
