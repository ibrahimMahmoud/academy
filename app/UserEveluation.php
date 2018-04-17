<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEveluation extends Model
{
    protected $table ="user_eveluation" ;
    protected $fillable = [
    	'scoure',
    	'is_start',
    	'start_date',
    	'user_id',
    	'position_id',
    ];
}
