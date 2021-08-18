<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaCentro extends Model
{
    public function centro(){
        return $this->belongsTo('App\Centro');
    }

    public function dia()
    {
        return $this->belongsTo('App\Dia');
    }
}
