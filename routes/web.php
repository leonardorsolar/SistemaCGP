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
Route::get('/projects/{project}/status', 'ProjectsController@status');
// editar
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// update
Route::patch('/projects/{project}', 'ProjectsController@update');
Route::post('/projects', 'ProjectsController@store');

// enviando a escrita da tarefa para o banco
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
// update tarefa
Route::patch('/projects/{project}/tasks/{task}', 'ProjectTasksController@update');

// criando setores 
Route::get('/projects/create/sector', 'SectorsController@create');
Route::post('/projects/create/sector', 'SectorsController@store');

// create tipo de projeto : rota  - TypeProjectsController - create - createtypeproject.blade
Route::get('/projects/create/typeprojects', 'TypeProjectsController@create');
// salvando (store) : rota - TypeProjects - TypeProjectsController - store
Route::post('/projects/create/typeprojects', 'TypeProjectsController@store');
// selecionando as áreas do tipo de projeto com id x
// a rota é tipo de projeto com id x que vai recuperar as áreas
Route::get('/typeprojects/{typeprojects}/areas', function($typeProject_id) {
    return  App\Entities\AreaProject::where('type_project_id','=',$typeProject_id)->get();
});


Route::get('/projects/create/areaprojects', 'AreaProjectsController@create');
Route::post('/projects/create/areaprojects', 'AreaProjectsController@store');



Route::get('/okr', function () {
    return view('projects.okr');
});


Route::get('/pag', function () {
    return view('projects.create');
});


//Route::get('/home', 'TesteController@index');

//Route::get('/teste01', function () {
//   return view('teste.index');
//});