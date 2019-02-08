<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function users(){
        return $this->belongsTo('App\User');

    }
    public function dogs(){
        return $this->belongsTo('App\Dog');
    }
}
