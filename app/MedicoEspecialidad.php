<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicoEspecialidad extends Model
{
    public function medico()
    {
        return $this->belongsToMany('App\Medico');
    }

    public function especialidadMedica()
    {
        return $this->belongsToMany('App\EspecialidadMedica');
    }
}
