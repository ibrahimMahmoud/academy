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
}
