<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function region(){
        return $this->belongsTo('App\Region');
    }
    public function comuna(){
        return $this->belongsTo('App\Comuna');
    }

    public function telefonoPersona(){
        return $this->hasMany('App\TelefonoPersona');
    }

    public function personaUser(){
        return $this->belongsToMany('App\PersonaUser');
    }

    public function paciente(){
        return $this->hasMany('App\Paciente');
    }

    public function medico(){
        return $this->hasMany('App\Medico');
    }

    public function administradorCentro(){
        return $this->hasMany('App\AdministradorCentro');
    }
}
