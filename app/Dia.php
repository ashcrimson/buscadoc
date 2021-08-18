<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    public function centros()
    {
        return $this->belongsToMany(Centro::class,'centros_dias');
    }

    public function diaCentro()
    {
        return $this->hasMany('App\DiaCentro');
    }

    public function diaBloque()
    {
        return $this->hasMany('App\DiaBloque');
    }
    
}
