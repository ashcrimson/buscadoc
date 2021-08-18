<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function persona(){
        return $this->belongsTo('App\Persona');
    }

    public function prevision(){
        return $this->belongsTo('App\Prevision');
    }
}
