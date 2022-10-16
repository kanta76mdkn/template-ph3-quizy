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

    <form action="/admin/big_questions/delete/{{ $big_question->id }}" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $big_question->id }}">
            <tr>
                <th>タイトル：</th>
                <td>{{ $big_question->name }}</td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="削除"></td>
            </tr>
        </table>
    </form>

</body>
