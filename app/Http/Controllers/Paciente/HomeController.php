<?php

namespace App\Http\Controllers\paciente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;

class HomeController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }    
    
    public function index()
    {
        $users = \App\User::all();
        $user = Auth::user();
        return view('paciente.home')->with([
            'user' => $user,
            'roles' => Role::all(),
            'userRoles'=> $user->roles()->get()
        ]);
    }
}
