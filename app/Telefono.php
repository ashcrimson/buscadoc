<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    public function telefonoCliente()
    {
        return $this->hasMany('App\TelefonoCliente');
    }

    public function telefonoPersona()
    {
        return $this->hasMany('App\TelefonoPersona');
    }

    public function telefonoCentro()
    {
        return $this->hasMany('App\TelefonoCentro');
    }
}
