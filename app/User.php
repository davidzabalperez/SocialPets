<?php

namespace App;

use App\Dog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = ['deleted_at'];

    public function mensajes(){
        return $this->hasMany('App\Mensaje');
    }
    public function dog(){
        return $this->hasOne('App\Dog','user_id');
    }

    public function friendsOfMine(){
        return $this->belongsToMany('App\User', 'friends', 'user_id', 'friend_id');
    }
    public function friendsOf(){
        return $this->belongsToMany('App\User', 'friends', 'friend_id', 'user_id');
    }
    public function friends(){
        return $this->friendsOfMine->merge($this->friendsOf);
    }
}