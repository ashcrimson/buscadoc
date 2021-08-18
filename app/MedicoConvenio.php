<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicoConvenio extends Model
{
    public function prevision(){
        return $this->belongsToMany('App\Prevision');
    }

    public function medico(){
        return $this->belongsTo('App\Medico');
    }
}
