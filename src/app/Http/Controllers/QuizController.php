<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
}
