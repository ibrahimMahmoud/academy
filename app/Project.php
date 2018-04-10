<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "user_project"; 
    protected $fillable = ['user_id','project_name','caver_url','description']; 
}
