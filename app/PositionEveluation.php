<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PositionEveluation extends Model
{
    protected $table = "position_eveluation";
    protected $fillable = [
    	'position_id',
		'updated_by',
		'degree',
		'is_active',
    ];


    public function questions()
    {
    	return $this->hasMany('App\EveliationQuestions','id','postion_id');
    }

   public function PostionEveluation()
   {
   	return $this->hasOne('App\PositionEveluation','id','postion_id');
   }
}
