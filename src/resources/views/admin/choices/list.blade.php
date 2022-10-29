<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        div {text-align: center}
        a {text-align: center}
        li {margin: 0 auto !important}
    </style>
    <title>選択肢一覧</title>
</head>

<body>
    <ul class="ul">
        @foreach ($choices as $choice)
            <li class="q">{{ $choice->name }}</li>
            <div>
                <a href="/admin/choices/edit/{{ $choice->id }}">選択肢名を編集</a><br>
                <a href="/admin/choices/delete/{{ $choice->id }}">選択肢を削除</a>
            </div>
        @endforeach
    </ul>
</body>

</html>
