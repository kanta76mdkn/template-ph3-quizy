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
