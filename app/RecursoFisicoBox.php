<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoFisicoBox extends Model
{
    public function recursoFisico(){
        return $this->belongsTo('App\RecursoFisico');
    }

    public function bloque(){
        return $this->belongsTo('App\Bloque');
    }
}
