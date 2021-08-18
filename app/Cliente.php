<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model

{
    protected $table = 'clientes';

    public function centros()
    {
        return $this->hasMany('App\Centro');
    }

    public function especialidadCliente()
    {
        return $this->hasMany('App\EspecialidadCliente');
    }

    public function telefonoCliente()
    {
        return $this->hasMany('App\TelefonoCliente');
    }

    public function medicoCliente()
    {
        return $this->hasMany('App\MedicoCliente');
    }

    public function userCliente()
    {
        return $this->hasMany('App\UserCliente');
    }

    public function equipamientoCliente()
    {
        return $this->hasMany('App\EquipamientoCliente');
    }


    # esta instruccion indica la relación muchos a muchos con la tabla users
    public function users(){
    	return $this->belongsToMany('App\User');    
    }

    #aqui la relación es muchos a muchos con la tabla especialidad
    public function especialidad(){
    	return $this->belongsToMany('App\Especialidad');    
    }
}
