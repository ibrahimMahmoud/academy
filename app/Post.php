<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = "posts";
  protected $fillable = ['user_id','post_name','file_url','content']; 


  public function user ()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function like ()
    {
        return $this->hasMany('App\Like_Post','id');
    }

    public function comment ()
    {
        return $this->hasMany('App\Comment','id');
    }
}
