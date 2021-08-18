<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles(){
        return $this->belongsToMany('App\Role');    
    }

    public function hasAnyRole($roles)
    {
        if ($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }

        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()){
            return true;
        }

        return false;
    }
    
    # esta instruccion indica la relación muchos a muchos con la tabla clientes
    public function clientes()
    {
        return $this->belongsToMany('App\Cliente');
    }

    public function getUserClientData(){
        return $this->belongsToMany('App\Cliente');
    }

    public function personaUser()
    {
        return $this->belongsTo('App\PersonaUser');
    }

    public function roleUser()
    {
        return $this->belongsToMany('App\RoleUser');
    }

    public function adminlte_image()
    {
        return 'https://picsum.photos/300/300';
    }

    public function adminlte_desc()
    {
        return "That\'s a nice guy";
    }
    public function adminlte_profile_url()
    {
        return 'profile/username';
    }

    
}

