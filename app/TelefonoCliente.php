<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TelefonoCliente extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function telefono()
    {
        return $this->belongsTo('App\Telefono');
    }
}
