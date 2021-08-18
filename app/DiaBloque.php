<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaBloque extends Model
{
    public function bloque(){
        return $this->belongsTo('App\Bloque');
    }

    public function dia(){
        return $this->belongsTo('App\Dia');
    }
}
