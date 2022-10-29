<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/admin.css') }}">
    <title>小問編集ページ</title>
</head>

<body>
    <form action="" method="post">
        @csrf
        <div class="list">
            <div class="list_labels">
                <div class="list_labels--left">クイズ名</div>
                <div class="list_labels--right">操作</div>
            </div>
            <div class="sortable">
                @foreach ($questions as $question)
                    <div class="list_content" id="{{ $question->id }}">
                        <div class="list_quiz--big">
                            <a href="/admin/choices/list/{{ $question->id}}">問題：{{ $loop->iteration }}</a>
                            <a href=""></a>
                            <img src="{{ '/img/' . $question->image }}" alt="">
                        </div>
                        <div class="list_actions--big">
                            <a href="/admin/small_questions/edit/{{ $question->id }}">設問名を編集</a>
                            <a href="/admin/small_questions/delete/{{ $question->id }}">設問を削除</a>
                        </div>
                    </div>
                @endforeach
                <input type="hidden" id="list-ids" name="list-ids" />
                <div class="list_content">
                    <div class="list_quiz">
                        <a href="/admin/small_questions/{{ $big_question_id }}/add">＋設問を追加</a>
                    </div>
                    <div class="list_actions">
                        <button id="submit">更新</button>
                    </div>
                </div>
                <div class="list_content">
                    <a href="/admin/big_questions">大問の一覧に戻る</a>
                </div>
            </div>
        </div>
    </form>


</body>

</html>
