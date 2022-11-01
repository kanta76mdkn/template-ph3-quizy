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

    // 設問表示用
    public function question($big_question_id)
    {
        // eloquentでデータを取得（問題）
        $questions = Question::where('big_question_id', '=', $big_question_id)->get();
        return view('admin.small_questions.list', compact('questions', 'big_question_id'));
    }

    // 設問追加用
    public function add_question(Request $request, $id)
    {
        return view('admin.small_questions.add', compact('id'));
    }
    public function create_question(Request $request, $id)
    {
        $big_question = BigQuestion::find($id);
        $question = new Question;
        $question->big_question_id = $id;
        $file = $request->image;
        if ($file) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('img/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $question->image = $fileName;
        $question->id = Question::max('id') + 1;
        $question->save();
        return redirect('/admin/small_questions/' . $big_question->id);
    }

    // 設問編集用
    public function edit_question(Request $request, $id)
    {
        $question = Question::find($id);
        return view('admin.small_questions.edit', compact('question', 'id'));
    }

    public function update_question(Request $request, $id)
    {
        $file = $request->image;
        $question = Question::find($id);
        if ($file) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('img/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }
        $question->image = $fileName;
        $question->save();
        return redirect('/admin/small_questions/' . $question->big_question_id);
    }

    // 設問削除用
    public function delete_question(Request $request, $id)
    {
        $question = Question::find($id);
        return view('admin.small_questions.delete', compact('question', 'id'));
    }

    public function remove_question(Request $request, $id)
    {
        $file = $request->image;
        $question = Question::find($id);
        if ($file) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('img/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }
        $question->image = $fileName;
        $question->delete();
        // $question->save();
        return redirect('/admin/small_questions/' . $question->big_question_id);
    }

    // 選択肢表示用
    public function choice($question_id)
    {
        $question = Question::where('big_question_id', '=', $question_id)->get();
        // 選択肢を表示
        $choices = Choice::where('question_id', '=', $question_id)->get();

        return view('admin.choices.list', compact('question', 'choices'));
    }

    public function edit_choice(Request $request, $id)
    {
        $choices = Choice::find($id);
        return view('admin.choices.edit', compact('choices', 'id'));
    }

    public function update_choice(Request $request, $id)
    {
        $choices = Choice::find($id);
        $choices->name = $request->input('name');
        $choices->save();
        return redirect('/admin/choices/list/' . $choices->question_id);
    }
}
