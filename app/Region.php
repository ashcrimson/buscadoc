<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table ="regiones";

    protected $fillable =[
        'nombre',
    ];

    public function comunas()
    {
        return $this->hasMany('App\Comuna');
    }

    public function centro(){
        return $this->hasMany('App\Centro');
    }

    public function persona(){
        return $this->hasMany('App\Persona');
    }
}
