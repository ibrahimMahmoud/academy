<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable=['user_id','post_id','content'];

    public function user ()
    {
    	return $this->hasMany('App\User','first_name','last_name');
    }
}
