<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function friendsOfMine(){
        return $this->belongsToMany('App\Dog', 'friends', 'user_id', 'friend_id');
    }
    public function friendsOf(){
        return $this->belongsToMany('App\Dog', 'friends', 'friend_id', 'user_id');
    }
    public function friends(){
        return $this->friendsOfMine->merge($this->friendsOf);
    }
}
