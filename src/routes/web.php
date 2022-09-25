<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/quiz', 'AdminController@index');


Route::get('/quiz', 'QuizController@index');



Route::get('quiz/{id}', 'QuizController@quiz')->name('quiz');
// quiz/1があったらquizycontrollerでquiz1っていう処理を実行してください

Auth::routes();

// home画面に行く前にログインをしてください（->middleware('Auth')）
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
