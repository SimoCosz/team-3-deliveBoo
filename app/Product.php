<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'visibility',
        'cover'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function orders(){
        return $this->belongsToMany('App\Order');
    }
}
