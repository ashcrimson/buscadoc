<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministradorCentro extends Model
{
    public function centro(){
        return $this->belongsTo('App\Centro');
    }

    public function persona(){
        return $this->belongsTo('App\Persona');
    }
}
