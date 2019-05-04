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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'comment'],function(){
    Route::get('/index', 'CommentController@index')->name('comments');
    Route::get('/', function(){
        return view('comment/comment');
    });
    Route::post('/', function(Request $request){
        return $request->all();
    })->name('comment.store')->middleware('auth');
    Route::post('create', 'CommentController@create')->name('comment.create');
    Route::post('update/{id}', 'CommentController@update')->name('comments.update')->middleware('auth');
    Route::delete('delete', 'CommentController@delete')->name('comments.delete')->middleware('auth');
    Route::post('edit/{id}', 'CommentController@edit')->name('comments.edit')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/tambah', 'PertanyaanController@tambah');
Route::post('/pertanyaan/store','PertanyaanController@store');
