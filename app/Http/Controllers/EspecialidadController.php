<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use App\Especialidad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;

class EspecialidadController extends Controller
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
        #obenter el listado de especialidades desde la tabla de especialidades
        #obtener el listado de especialidades asignadas a un cliente
        #pasar a la vista ambos listados de especialides.
        $especialidades = \App\Especialidad::all();
        $clienteEspecialidad = $especialidades::getClienteEspecialidadData();

        return view('especialidades.especialidad')->with([
            'user' => $user,
            'roles' => Role::all(),
            'userRoles'=> $user->roles()->get(),
            'especialidades' => $especialidades,
            'clienteEspecialidad'=>$clienteEspecialidad
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
     * @param  \App\EspecialidadMedica  $especialidadMedica
     * @return \Illuminate\Http\Response
     */
    public function show(Especialidad $especialidadMedica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EspecialidadMedica  $especialidadMedica
     * @return \Illuminate\Http\Response
     */
    public function edit(Especialidad $especialidadMedica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EspecialidadMedica  $especialidadMedica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especialidad $especialidadMedica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EspecialidadMedica  $especialidadMedica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especialidad $especialidadMedica)
    {
        //
    }
}
