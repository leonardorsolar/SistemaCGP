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

Route::group(['middleware'], function(){
    //Route::get('/admin', 'AdminController@index');

    //listando os usuários do sistema
    Route::get('/users', 'UserController@index');
    //Route::get('/user/add', 'UserController@getAdd');
    //Route::post('/user/add', 'UserController@postAdd');
    //Route::get('/user/edit/{id}', 'UserController@getEdit');
    //Route::post('/user/edit/{id}', 'UserController@postEdit');
    //Route::get('/user/delete/{id}', 'UserController@delete');
});



//home
// pagina principal home : @include('pages.home')-> @include('includes.tarefapp')
// pagina principal home : @include('pages.home')-> @include('includes.modal')
//return view('home', compact('sectories','type_projects','projects','tasks'));
Route::get('/home', 'HomeController@index')->name('home');


// Monitoramento-listar projetos: lista os projetos(aulas ou cursos) do banco
//controller: return view ('projects.index', compact('projects'));
Route::get('/projects', 'ProjectsController@index');
// cria os projetos(aulas ou cursos) no banco
//controller: return view('projects.create', compact('type_projects'));
Route::get('/projects/create', 'ProjectsController@create');
//Projeto ID com as tarefas ID:detalha um projeto id
//controller: return view ('projects.show', compact('project'));
//projects/show -> @include('includes.tarefa')
Route::get('/projects/{project}', 'ProjectsController@show');
// editar nome do projeto
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// status do projeto id
// Monitoramento-listar projetos -> status
//return view ('projects.status', compact('project','tarefas','total'));
Route::get('/projects/{project}/status', 'ProjectsController@status');


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
// selecionando os projetos da area projeto com id x
// a rota é area de projeto com id x que vai recuperar os projetos
Route::get('/areaprojects/{areaprojects}/projects', function($areaProject_id) {
    return  App\Project::where('area_projects_id','=',$areaProject_id)->get();
});


Route::get('/projects/create/areaprojects', 'AreaProjectsController@create');
Route::post('/projects/create/areaprojects', 'AreaProjectsController@store');


// manipulando arquivos
//https://www.cloudways.com/blog/laravel-multiple-files-images-upload/
Route::get('/multiuploads', 'UploadController@uploadForm');
Route::post('/multiuploads', 'UploadController@uploadSubmit');


// calendario
Route::get('/calendar01', 'CalendarController@index');


//testes
Route::get('/getdownload', 'DownloadController@getdownload');
Route::get('/download/{filename}', 'DownloadController@download');
Route::get('/delete/{filename}', 'DownloadController@delete');
//Route::get( '/download/{filename}', 'DownloadController@downloadarquivo');


Route::get('/okr', function () {
    return view('projects.okr');
});


Route::get('/tes', function () {
    return view('teste.index');
});


//Route::get('/home', 'TesteController@index');

//Route::get('/teste01', function () {
//   return view('teste.index');
//});