<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    //問題リスト表示用
    public function index()
    {
        // big_questions テーブルのデータを全て取得し $links に格納
        // getがselectみたいなもん
        $links = DB::table('big_questions')->get();
        // list.blade.php で foreach を回し問題リストを表示させる
        // 階層下がるときは.を使う
        return view('quiz.list',compact('links'));

        
        // $choices = DB::table('choices')->get();
        // return view('quiz/quiz1', ['choices' => $choices]);
    }
    public function quiz($id)
    {   
        $questions = DB::table('questions')->where('big_question_id',$id)->get();
        return view('quiz.quiz',compact('questions'));
    }
}
