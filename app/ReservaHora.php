<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaHora extends Model
{
    public function cupo(){
        return $this->belongsTo('App\Cupo');
    }
}
