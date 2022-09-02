<!DOCTYPE html>
<html>

<head>
    <title>quiz1</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <h1>1.この地名はなんて読む?</h1>
    <img src="{{'/img/'.$questions->image}}" alt="">

    <!-- ダブルクオートの中だったら変数展開できるよ -->
    @foreach($questions->choices as $choice)
    <!-- choices Tableの中は配列で帰ってきている
    　→配列番号ごとに返ってくるようにした。
    　→choices Tableには番号しか元々なかった
    　→番号の中に入っている情報を持ってくるようにした。 -->
    <div>{{$choice->name}}</div>
    @endforeach






</body>
</html>