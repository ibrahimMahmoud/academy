<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','phone','user_type_id','is_active','position_id',
        'name', 'email', 'password','facebook_id','work_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function position ()
    {
        return $this->belongsTo('App\Positions','position_id');
    }

    public function post ()
    {
        return $this->hasMany('App\Post','id');
    }

    public function comment ()
    {
        return $this->hasMany('App\Comment','user_id');
    }

    public function User_Eveluation()
    {
        return $this->belongsTo('App\UserEveluation','id','user_id');
    }

    public function like ()
    {
        return $this->hasMany('App\Like_Post','id');
    }
}
