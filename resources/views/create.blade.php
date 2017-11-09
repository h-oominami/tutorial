
<!--
 create.php
 概要：記事作成画面
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>記事作成画面</title>
    </head>
        <p>
        {!! Form::open(['url' => 'posts']) !!}
        タイトル：<br>
        <div class="form-group">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div><br>
        記事内容：<br>
        <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('登録', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
        </p>
        {{ link_to_route('posts.index', '一覧へ戻る')}}
    </body>
</html>