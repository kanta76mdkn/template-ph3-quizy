<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>選択肢編集ページ</title>
</head>

<body>
    <form action="{{ route('choice_update',['id' => $id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" value="{{ $choices->name }}">
        <input type="submit" value="編集">
    </form>

</body>
