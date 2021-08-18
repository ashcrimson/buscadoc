<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    public function recursoFisicoBox(){
        return $this->hasMany('App\RecursoFisicoBox');
    }

    public function diaBloque(){
        return $this->hasMany('App\DiaBloque');
    }

    public function bloqueMedico(){
        return $this->hasMany('App\BloqueMedico');
    }

    public function cupo(){
        return $this->hasMany('App\Cupo');
    }
}

