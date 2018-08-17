<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    public function provind(){
        return $this->belongsTo('App\Provind','provindID','id');
    }
}
