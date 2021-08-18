<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaUser extends Model
{
    public function persona(){
        return $this->belongsToMany('App\Persona');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
