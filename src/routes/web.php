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

Route::get('/list', function () {
    return view('quiz.list');
});

// Route::get('hello', function () {
//     return '<html><body><h1>Hello</h1><p>This is sample page.
//         </p></body></html>';
// });

// Route::get('hello',function(){
//     return view('hello.index');
// });

Route::get('quiz/1', 'QuizController@quiz1');
// quiz/1があったらquizycontrollerでquiz1っていう処理を実行してください
Route::get('quiz/2', 'QuizController@quiz2');

// Route::get('hello/other', 'HelloController@other');

?>