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

Auth::routes();

//home
Route::get('/home', 'HomeController@index')->name('home');


// lista os projetos
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
// detalha um projeto id
Route::get('/projects/{project}', 'ProjectsController@show');
// nada
//Route::get('/projects/{project}/edit', 'ProjectsController@edit');
Route::post('/projects', 'ProjectsController@store');

// enviando a escrita da tarefa para o banco
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');




Route::get('/pag', function () {
    return view('projects.create');
});


//Route::get('/home', 'TesteController@index');

//Route::get('/teste01', function () {
//   return view('teste.index');
//});