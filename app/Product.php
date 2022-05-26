<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }

    public function orders(){
        return $this->belongsToMany('App\Order');
    }
}
