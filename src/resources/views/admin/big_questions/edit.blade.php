<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>大問編集ページ</title>
</head>

<body>
    <form action="/admin/big_questions/edit/{{ $big_question->id }}" method="post" enctype="multipart/form">
        @csrf
        <input type="text" name="big_question" value="{{ $big_question->name }}">
        <input type="submit" value="更新">
    </form>

</body>
