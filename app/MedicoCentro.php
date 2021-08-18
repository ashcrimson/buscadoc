<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicoCentro extends Model
{
    public function centro(){
        return $this->belongsTo('App\Centro');
    }

    public function medico(){
        return $this->belongsTo('App\Medico');
    }
}
