<?php

namespace App\Http\Controllers;

use App\Entities\Sector;
use App\Entities\AreaProject;
use Illuminate\Http\Request;

class TesteController extends Controller
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
        //$sectories = Sector::all();
       //return view('teste.index', compact('sectories'));

       $area_projects = AreaProject::all();
       return view('teste.index', compact('area_projects'));

        //$sectories = Sector::all();
        //return view('teste', compact('sectories'));

        //$type_projects = TypeProject::all();
        //return view('home', compact('type_projects'));


        //$areaprojects = AreaProject::all();
        //return view('teste', compact('areaprojects'));
    }
}
