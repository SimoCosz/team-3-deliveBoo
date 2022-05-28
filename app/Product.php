<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'visibility',
        'cover',
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function orders(){
        return $this->belongsToMany('App\Order');
    }

    public static function getUniqueSlug($name) {
        $slug = Str::slug($name);
        $slug_base = $slug;
    
        $counter = 1;
    
        $product_present = Product::where('slug',$slug)->first();
    
        while ($product_present) {
            $slug = $slug_base . '-' . $counter;
            $counter++;
            $product_present = Product::where('slug',$slug)->first();
        }
    
        return $slug;
    }
}
