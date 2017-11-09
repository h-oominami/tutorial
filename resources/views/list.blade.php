
<!--
 list.php
 概要：記事一覧画面
-->
@extends('layouts.app')
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
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
	                <td>{{$post->content}}</td>
                </tr>
                @endforeach
    </table>
</html>
