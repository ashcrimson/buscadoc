<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TelefonoPersona extends Model
{
    public function telefono()
    {
        return $this->belongsTo('App\Telefono');
    }

    public function persona(){
        return $this->belongsTo('App\Persona');
    }
}

