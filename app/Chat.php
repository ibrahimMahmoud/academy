<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chats';
    protected $fillable=['title','receiver_id','sender_id','content'];

    public function receiver ()
    {
        return $this->belongsTo('App\User','receiver_id');
    }

    public function sender ()
    {
        return $this->belongsTo('App\User','sender_id');
    }

}
