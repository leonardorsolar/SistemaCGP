<?php

namespace App\Http\Controllers;

use App\Entities\Sector;
use App\Entities\TypeProject;
use App\Entities\AreaProject;
use App\Entities\Classe;
use App\Project;
use App\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sectories = Sector::all();
        $type_projects = TypeProject::all();
        $projects = Project::all();
        $tasks = Task::with('user')->get();
       return view('home', compact('sectories','type_projects','projects','tasks'));
    }


    public function store()
    {
        // insert no banco persist
    Project::create(request(['title','description']));
    // redirect
    return redirect ('projects');  
    }

    public function show(Classe $project)
    {

        $class = Classe::all();
    //an_authenticated_cannot_view_the_projects_of_others()
    //if (auth()->id() != $project->owner_id) {
        //if (auth()->user()->isNot($project->owner)) {   
        //abort(403); }
       // $this->authorize('update', $project);

    return view('projects.show', compact('class'));
    }
}
