<?php

namespace App\Http\Controllers\secretaria;

use App\Http\Controllers\Controller;
use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;

class EventosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();
        $user = Auth::user();
        return view('secretaria.calendario')->with([
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
        $datosEvento = request()->except(['_token','_method']);
        evento::insert($datosEvento);
        print_r($datosEvento);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $datos['eventos']=evento::all();
        return response()->json($datos['eventos']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEvento = request()->except(['_token','_method']);
        $respuesta=evento::where('id','=',$id)->update($datosEvento);
        return response()->json($respuesta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventos=evento::findOrFail($id);
        evento::destroy($id);
        return response()->json($id);
    }
}
