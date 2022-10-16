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
        // big_questions テーブルのデータを全て取得し $links に格納
        // getがselectみたいなもん
        $big_questions = DB::table('big_questions')->get();
        // list.blade.php で foreach を回し問題リストを表示させる
        // 階層下がるときは.を使う
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
        $big_question->hide = 0;
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
        $big_question->hide = 1;
        $big_question->save();
        return redirect('/admin/big_questions');
    }

    

}
