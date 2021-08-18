<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupo extends Model
{
    public function recursoFisico(){
        return $this->belongsTo('App\RecursoFisico');
    }

    public function bloque(){
        return $this->belongsTo('App\Bloque');
    }

    public function reservaHora(){
        return $this->hasMany('App\ReservaHora');
    }
}
