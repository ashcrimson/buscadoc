<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{

    protected $table = 'especialidades';

    #aqui se indica la relación muchos a muchos con la tabla cliente
    public function clientes()
    {
        return $this->belongsToMany('App\Cliente');
    }
    
    #aqui se añade la funcion para traer la especialidad de los clientes
    public function getClienteEspecialidadData(){
        return $this->belongsToMany('App\Cliente','especialidades_clientes','cliente_id','especialidades_id');
    }
}
