<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicoCliente extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }
}
