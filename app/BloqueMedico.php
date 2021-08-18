<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloqueMedico extends Model
{
    public function bloque(){
        return $this->belongsTo('App\Bloque');
    }

    public function medico(){
        return $this->belongsTo('App\Medico');
    }
}
