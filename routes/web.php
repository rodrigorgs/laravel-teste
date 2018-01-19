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
    return view('admin_template');
});
Route::get('teacher/create', 'TeacherController@create');
Route::get('reuniao/colegiado/index', 'ReuniaoColegiadoController@index');
Route::post('reuniao/colegiado/buscar', 'ReuniaoColegiadoController@buscarReuniao');
Route::get('reuniao/colegiado/cadastro', 'ReuniaoColegiadoController@exibirCadastro');

