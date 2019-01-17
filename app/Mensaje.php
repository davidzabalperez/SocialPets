<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    public function user_sender(){
        return $this->belongsTo('App\User', 'id_sender');
    }

    public function user_receiver(){
        return $this->belongsTo('App\User', 'id_receiver');
    }


}
    