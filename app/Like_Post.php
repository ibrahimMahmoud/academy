<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like_Post extends Model
{
    protected $table = "like__posts";
  	protected $fillable = ['user_id','post_id']; 

  	 public function user ()
    {
        return $this->belongsTo('App\User','user_id');
    }

     public function post ()
    {
        return $this->belongsTo('App\Post','post_id');
    }
}
