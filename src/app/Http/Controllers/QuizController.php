<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\BigQuestion;
use App\Choice;

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
        return view('quiz.list', compact('links'));
    }



    public function quiz($id)
    {   
        // eloquentでデータを取得（問題）
        $questions = Question::where('big_question_id', '=', $id)->get();
        
        // 答えも取得
        $answers = DB::table('choices')->where('valid','=', 1)->get(); 

        return view('quiz.quiz', compact('questions', 'answers'));
    }
}
