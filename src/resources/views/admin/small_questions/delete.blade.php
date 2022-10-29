<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>大問追加ページ</title>
</head>

<body>
    <form action="{{ route('question_remove',['id' => $id]) }}" method="post" enctype="multipart/form-data">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <tr>
                <th>問題名：</th>
                <td>{{ $question->image }}</td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="削除"></td>
            </tr>
        </table>     
    </form>


</body>
