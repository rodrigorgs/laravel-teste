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

Route::get('/home', 'HomeController@index');
Route::resource('filmes', 'FilmeController');

Route::get('admin', function () {
    $data['page_title'] = 'Bem vindo!';
    return view('admin_template')->with($data);
});

Route::get('teacher/destroy/{id}', 'TeacherController@destroy');
Route::resource('teacher', 'TeacherController');

