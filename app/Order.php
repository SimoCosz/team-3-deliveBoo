<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products(){
        return $this->belongsToMany('App\Product');
    }

    protected $fillable = [
        'client_name',
        'client_surname',
        'client_address',
        'client_city',
        'client_phone',
        'client_email',
        'total_price',
        'payment_state',
        'user_id'
    ];
}
