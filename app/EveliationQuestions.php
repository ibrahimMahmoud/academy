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

    public function user()
    {
        return $this->belongsTo('App\User','created_by','id');
    }

    public function position ()
    {
        return $this->belongsTo('App\Positions','position_id');
    }
}
