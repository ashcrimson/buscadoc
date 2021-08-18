<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoFisico extends Model
{
    public function centro(){
        return $this->belongsTo('App\Centro');
    }

    public function recursoFisicoBox(){
        return $this->hasMany('App\RecursoFisicoBox');
    }

    public function recursoFisicoEquipamiento(){
        return $this->hasMany('App\RecursoFisicoEquipamiento');
    }

    public function cupo(){
        return $this->hasMany('App\Cupo');
    }
}
