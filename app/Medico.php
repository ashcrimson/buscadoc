<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    public function medicoCliente()
    {
        return $this->hasMany('App\MedicoCliente');
    }

    public function persona(){
        return $this->belongsTo('App\Persona');
    }

    public function medicoCentro()
    {
        return $this->hasMany('App\MedicoCentro');
    }

    public function bloqueMedico()
    {
        return $this->hasMany('App\BloqueMedico');
    }

    public function medicoConvenio()
    {
        return $this->hasMany('App\MedicoConvenio');
    }

    public function medicoEspecialidad()
    {
        return $this->belongsToMany('App\MedicoEspecialidad');
    }
}
