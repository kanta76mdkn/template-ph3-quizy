<!DOCTYPE html>
<html>

<head>
    <title>quiz1</title>
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
</head>

<body>
    <div class="main">

        <div class="quiz">

            @foreach ($questions as $index => $question)
                <h1>{{ $index + 1 }}.この地名はなんて読む?</h1>

                <img src="{{ '/img/' . $question->image }}" alt="">
                <ul>
                    @foreach ($question->choices as $i => $choice)
                        <li class="answerlist" id="answerlist_{{ $choice->question_id }}_{{ $i + 1 }}"
                            name="answerlist_{{ $choice->question_id }}"
                            onclick="clickfunction({{ $choice->question_id }}, {{ $i + 1 }},{{ $choice->valid }})">
                            {{ $choice->name }}</li>
                    @endforeach

                    <li id="answerbox_{{ $choice->question_id }}" class="answerbox">
                        <span id="answertext_{{ $choice->question_id }}"></span><br>
                        <span>正解は{{ $question->choices[0]->name }} </span>です！</span>
                </ul>
            @endforeach
        </div>
    </div>

    <script src="{{ asset('/quizy.js') }}"></script>


</body>

</html>
<!-- ダブルクオートの中だったら変数展開できるよ -->
<!-- choices Tableの中は配列で帰ってきている
    →配列番号ごとに返ってくるようにした。
    →choices Tableには番号しか元々なかった
    →番号の中に入っている情報を持ってくるようにした。 -->
