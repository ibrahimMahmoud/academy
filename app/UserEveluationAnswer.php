<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEveluationAnswer extends Model
{
    protected $table ="user_eveluation_answer" ;
    protected $fillable = [
    	'eveluation_id',
    	'question_id',
    	'scoure',
    	'answer',
    ];

    public function questions()
    {
        return $this->belongsTo('App\EveliationQuestions','question_id','id');

    }

    public function user_eveluation()
    {
    	return $this->belongsTo('App\UserEveluation','eveluation_id','id');
    }
}

