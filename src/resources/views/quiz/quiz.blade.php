<!DOCTYPE html>
<html>

<head>
    <title>quiz1</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    @foreach ($questions as $question)
    <h1>{{$loop->iteration}}.この地名はなんて読む?</h1>
    <!-- ダブルクオートの中だったら変数展開できるよ -->
    <img src='{{asset("img/$question->image")}}' alt="">
    @endforeach
</body>
</html>