<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'user_experiance';
        protected $fillable=[
            'user_id','title','company_name','from_date','to_date','description','currentlyWork'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
