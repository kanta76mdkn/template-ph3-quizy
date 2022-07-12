<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function quiz1()
    {
        return view('quiz.quiz1');
    }
    public function quiz2()
    {
        return view('quiz.quiz2');
    }
    //問題リスト表示用
    public function index() {
        // big_questions テーブルのデータを全て取得し $links に格納
        $links = DB::table('big_questions')->get();
        // list.blade.php で foreach を回し問題リストを表示させる
        return view('quiz/list', ['links' => $links]);
    }
}
