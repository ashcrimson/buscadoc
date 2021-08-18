<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prevision extends Model
{
    public function paciente(){
        return $this->hasMany('App\Paciente');
    }

    public function medicoConvenio(){
        return $this->belongsToMany('App\MedicoConvenio');
    }
}
