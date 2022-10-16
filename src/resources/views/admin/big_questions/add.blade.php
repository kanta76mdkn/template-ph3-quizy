<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>大問追加ページ</title>
</head>

<body>
    <form action="/admin/big_questions/add" method="post" enctype="multipart/form">
        @csrf
        <input type="text" name="big_question">
        <input type="submit" value="追加">
    </form>

</body>
