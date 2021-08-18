<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Role;
use Gate;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
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
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //me retorna al index si quiero acceder a una opción que no está permitida. En este caso, editar un usuario.
        if (Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }
        #dd($user->roles()->get());
        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => Role::all(),
            'userRoles'=> /*$userRoles*/ $user->roles()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();

        return redirect()->route('admin.users.index')->with('success','Usuario actualizado correctamente!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //me retorna al index si quiero acceder a una opción que no está permitida. En este caso, eliminar un usuario.
        if (Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));
        }

        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index');
    }

    public function save(Request $request){
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
  
        $user->roles()->sync($request->roles);
        
        return redirect(route('admin.users.index'));
    }

    public function register(User $user){
        #dd(Auth::user());
        $user = Auth::user();
        return view('admin.users.register')->with([
            'user' => $user,
            'roles' => Role::all(),
            'userRoles'=> $user->roles()->get()
        ]);
    }
}
