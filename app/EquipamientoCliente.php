<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipamientoCliente extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function equipamiento()
    {
        return $this->belongsTo('App\Equipamiento');
    }
}
