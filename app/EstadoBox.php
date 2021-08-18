<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoBox extends Model
{
    public function recursoFisico(){
        return $this->belongsTo('App\RecursoFisico');
    }
}
