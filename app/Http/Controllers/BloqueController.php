<?php

namespace App\Http\Controllers;

use App\Bloque;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;

class BloqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();
        $user = Auth::user();
        return view('bloques.bloque')->with([
            'user' => $user,
            'roles' => Role::all(),
            'userRoles'=> $user->roles()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bloque  $bloque
     * @return \Illuminate\Http\Response
     */
    public function show(Bloque $bloque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bloque  $bloque
     * @return \Illuminate\Http\Response
     */
    public function edit(Bloque $bloque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bloque  $bloque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bloque $bloque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bloque  $bloque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bloque $bloque)
    {
        //
    }
}
