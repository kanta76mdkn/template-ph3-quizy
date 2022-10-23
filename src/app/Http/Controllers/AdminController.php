<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\BigQuestion;
use App\Choice;

use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    // 大問表示用
    public function index()
    {
        $big_questions = DB::table('big_questions')->get();
        return view('admin.big_questions.index', compact('big_questions'));
    }

    // 大問追加用
    public function add_title()
    {
        return view('admin.big_questions.add');
    }
    public function create_title(Request $request)
    {
        $big_question = new BigQuestion;
        $big_question->id = BigQuestion::max('id') + 1;
        $big_question->name = $request->input('big_question');
        $big_question->save();
        return redirect('/admin/big_questions');
    }

    // 大問編集用
    public function edit_title($id)
    {
        $big_question = BigQuestion::find($id);
        return view('admin.big_questions.edit', ['big_question' => $big_question]);
    }

    public function update_title(Request $request, $id)
    {
        $big_question = BigQuestion::find($id);
        $big_question->name = $request->input('big_question');
        $big_question->save();
        return redirect('/admin/big_questions');
    }

    // 大問削除用
    public function delete_title($id)
    {
        $big_question = BigQuestion::find($id);
        return view('admin.big_questions.delete', ['big_question' => $big_question]);
    }

    public function remove_title($id)
    {
        $big_question = BigQuestion::find($id);
        $big_question->delete();
        // $big_question->save();
        return redirect('/admin/big_questions');
    }

    // 小問表示用
    public function question($id)
    {
        // eloquentでデータを取得（問題）
        $questions = Question::where('big_question_id', '=', $id)->get();
        // 答えも取得
        return view('admin.small_questions.list', compact('questions'));
    }

    public function add_question(Request $request)
    {
        return view('admin.small_questions.add');
    }

    public function create_question(Request $request, $id)
    {
        $big_question = BigQuestion::find($id);
        $question = new Question;
        $question->big_question_id = $id;

        if ($file = $request->image) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('img/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $question->image = $fileName;
        $question->id = Question::max('id') + 1;
        $question->save();
        return redirect('/admin/small_questions/'.$big_question->id);
    }


    



}
