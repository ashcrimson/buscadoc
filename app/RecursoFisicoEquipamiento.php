<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoFisicoEquipamiento extends Model
{
    public function recursoFisico(){
        return $this->belongsTo('App\RecursoFisico');
    }
}
