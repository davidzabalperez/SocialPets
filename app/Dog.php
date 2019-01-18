<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public function users(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
