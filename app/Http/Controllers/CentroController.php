<?php

namespace App\Http\Controllers;

use App\Centro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use App\Region;
use App\Comuna;
use Illuminate\Support\Arr;

class CentroController extends Controller
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
        $centros = Centro::all();
        $regiones = Region::all();
        $comunas = Comuna::all();

        return view('centros.centro')->with([
            'user' => $user,
            'roles' => Role::all(),
            'centros'=> $centros,
            'userRoles'=> $user->roles()->get(),

            'regiones'=> $regiones,
            'comunas'=> $comunas
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
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function edit(Centro $centro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Centro $centro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centro $centro)
    {
        //
    }
}
