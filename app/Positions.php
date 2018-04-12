<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $table = "positions"; 

    public function user ()
    {
    	return $this->hasMany('App\User','EN_name','AR_name');
    }
}
