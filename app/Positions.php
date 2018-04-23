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

    public function questions()
    {
    	return $this->hasMany('App\EveliationQuestions','position_id','id');
    }

   public function PostionEveluation()
   {
   	return $this->hasOne('App\PositionEveluation','position_id','id');
   }
}
