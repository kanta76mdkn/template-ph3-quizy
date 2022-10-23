<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/admin.css') }}">
    <title>大問編集ページ</title>
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
                @foreach ($big_questions as $big_question)
                    <div class="list_content" id="{{ $big_question->id }}">
                        <div class="list_quiz">
                            <a href="/admin/small_questions/{{ $big_question->id }}">{{ $big_question->name }}</a>
                        </div>
                        <div class="list_actions">
                            <a href="/admin/big_questions/edit/{{ $big_question->id }}">大問名を編集</a>
                            <a href="/admin/big_questions/delete/{{ $big_question->id }}">大問を削除</a>
                        </div>
                    </div>
                @endforeach
                <input type="hidden" id="list-ids" name="list-ids" />
                <div class="list_content">
                    <div class="list_quiz">
                        <a href="/admin/big_questions/add">＋新しいタイトルを追加</a>
                    </div>
                    <div class="list_actions">
                        <button id="submit">更新</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


</body>

</html>



