<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    public function index() {

      // $users = User::with('roles')->get();

       $users = User::all();
       // $users = User::get();

        return view('pages.users', compact('users'));
}

}
