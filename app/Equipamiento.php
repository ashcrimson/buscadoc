<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamiento extends Model
{
    public function equipamientoCliente()
    {
        return $this->hasMany('App\EquipamientoCliente');
    }
}
