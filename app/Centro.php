<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    protected $table = 'centros';

    protected $filable = [
        'nombre','direccion','hora_apertura','hora_cierre','cantidad_recursos_fisico'
    ];

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

    //centros
    public function telefonoCentro(){
        return $this->hasMany('App\TelefonoCentro');
    }

    public function diaCentro(){
        return $this->hasMany('App\DiaCentro');
    }

    public function medicoCentro(){
        return $this->hasMany('App\MedicoCentro');
    }

    public function administradorCentro(){
        return $this->hasMany('App\AdministradorCentro');
    }

    public function recursoFisico(){
        return $this->hasMany('App\RecursoFisico');
    }
    //regiones y comunas
    public function region(){
        return $this->belongsTo('App\Region');
    }

    public function comuna(){
        return $this->belongsTo('App\Comuna');
    }
}
    

