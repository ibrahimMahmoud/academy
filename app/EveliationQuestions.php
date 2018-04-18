<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EveliationQuestions extends Model
{
    protected $table ="eveliation_questions" ;
    protected $fillable = [
    	'question',
    	'scoure',
    	'created_by',
    	'position_id',
    ];

    public function usereveluation()
    {
    	return $this->belongsTo('App\UserEveluation','id','question_id');

    }
}
