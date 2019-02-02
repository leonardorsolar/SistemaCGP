<?php

namespace App\Http\Controllers;

use App\Entities\Sector;
use App\Entities\TypeProject;
use App\Entities\AreaProject;
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
        $area_projects = AreaProject::all();
        $type_projects = TypeProject::all();
       return view('home', compact('sectories','type_projects','area_projects'));

       //$area_projects = AreaProject::all();
       //return view('teste.index', compact('area_projects'));

        //$type_projects = TypeProject::all();
        //return view('home', compact('type_projects'));

        //$area_projects = AreaProject::all();
        //return view('home', compact('area_projects'));
        
        //$areaprojects = AreaProject::all();
        //return view('teste', compact('areaprojects'));
    }
}
