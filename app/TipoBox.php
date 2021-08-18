<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoBox extends Model
{
    public function recursoFisico(){
        return $this->belongsTo('App\RecursoFisico');
    }
}
