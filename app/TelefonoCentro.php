<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TelefonoCentro extends Model
{
    public function centro(){
        return $this->belongsTo('App\Centro');
    }

    public function telefono(){
        return $this->belongsTo('App\Telefono');
    }
}
