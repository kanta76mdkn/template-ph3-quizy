<?php

namespace App\Http\Controllers;

use App\Question;
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
        return view('quiz.list', compact('links'));


        // $choices = DB::table('choices')->get();
        // return view('quiz/quiz1', ['choices' => $choices]);
    }
    public function quiz($id)
    {
        // $questions = DB::table('questions')
        //     ->where('big_question_id',$id)
        //     ->choices()
        //     ->get();
        // $choices = DB::table('questions')
        //     ->join('choices', 'choices.question_id', '=', 'questions.id')
        //     ->where('big_question_id', '=', $id)
        //     ->get()
        //     ->groupBy('question_id');



        $questions = Question::find($id);
        $q = Question::where('id', $id)->get();;

        // dd($questions->choices, $questions->choices());
        dd($questions, $q);

        // dd($choices);
        $answers = DB::table('questions')
            ->join('choices', 'choices.question_id', '=', 'questions.id')
            ->where('valid', '=', 1)
            // ->select('big_questions_id','name')
            ->get();
            // dd($answers);

        return view('quiz.quiz', compact('questions'));        // ->join('choices', 'choices.question_id', '=', 'questions.id')

 

    }
    // 選択肢？回答？をjoinして選択肢分の設問を取得 (絞り込み条件に大問1を今回は指定) 選択肢 = choices, 設問 = questions, 大問 = big_questions

    // 取得した後に設問毎にグルーピングしたリストに加工
}
