<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    public function user(){
        return $this->belongsTo('App/User');
    }
}
