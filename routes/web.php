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



Route::prefix('comment')->group(function(){
    Route::get('/', 'CommentController@index')->name('comments');
    Route::get('create', 'CommentController@create')->name('comment/create');
    Route::get('update/{id}', 'CommentController@update')->name('comments/update');
    Route::get('delete', 'CommentController@delete')->name('comments/delete');
    Route::get('edit/{id}', 'CommentController@edit')->name('comments/edit');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/tambah', 'PertanyaanController@tambah');
Route::post('/pertanyaan/store','PertanyaanController@store');

Route::group(['middleware' => ['auth']], function() {
	Route::get('/artikel', 'ArtikelController@index');
	Route::get('/looklocation/{id}','HomeController@looklocation');
	// Route::post('/editprofile','LoginRegister@editprofile');
});