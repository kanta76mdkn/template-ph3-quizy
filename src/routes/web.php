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




// 編集画面用 大問
// Route::get('/admin/big_questions', 'AdminController@index');
// Route::post('/admin/big_questions/add', 'AdminController@create_title');

Route::get('/admin/big_questions', 'AdminController@index');
Route::get('/admin/big_questions/add', 'AdminController@add_title');
Route::post('/admin/big_questions/add', 'AdminController@create_title');


Route::get('/admin/big_questions/edit/{id}', 'AdminController@edit_title');
Route::post('/admin/big_questions/edit/{id}', 'AdminController@update_title');

Route::get('/admin/big_questions/delete/{id}', 'AdminController@delete_title');
Route::post('/admin/big_questions/delete/{id}', 'AdminController@remove_title');


// 編集画面用　設問
Route::get('/admin/small_questions/{id}', 'AdminController@question');
Route::get('/admin/small_questions/{id}/add', 'AdminController@add_question');
Route::post('/admin/small_questions/{id}/add', 'AdminController@create_question')->name('question_add');

Route::get('/admin/small_questions/edit/{id}', 'AdminController@edit_question');
Route::post('/admin/small_questions/edit/{id}', 'AdminController@update_question')->name('question_update');

Route::get('/admin/small_questions/delete/{id}', 'AdminController@delete_question');
Route::post('/admin/small_questions/delete/{id}', 'AdminController@remove_question')->name('question_remove');


// 編集画面用　選択肢
Route::get('/admin/choices/list/{id}', 'AdminController@choice');
Route::get('/admin/choices/add', 'AdminController@add_choice');
Route::post('/admin/choices/add', 'AdminController@create_choice');










// ユーザー画面用
Route::get('/quiz', 'QuizController@index');
Route::get('quiz/{id}', 'QuizController@quiz')->name('quiz');
// quiz/1があったらQuiz controllerでquiz1っていう処理を実行してください



// 登録関係
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
// home画面に行く前にログインをしてください（->middleware('Auth')）
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
