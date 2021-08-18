<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspecialidadCliente extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function especialidadMedica()
    {
        return $this->belongsTo('App\EspecialidadMedica');
    }
}
