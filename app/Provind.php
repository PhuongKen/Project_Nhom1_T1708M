<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provind extends Model
{
    protected $table = 'provinds';

    public function district(){
        return $this->hasMany('App\District','provindID','id');
    }
}
