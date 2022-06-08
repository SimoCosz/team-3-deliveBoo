<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'city',
        'telephone_number',
        'p_iva',
        'cover',
        'email', 
        'password',
        'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getUniqueSlug($name) {
        $slug = Str::slug($name);
        $slug_base = $slug;

        $counter = 1;

        $user_present = User::where('slug',$slug)->first();

        while ($user_present) {
            $slug = $slug_base . '-' . $counter;
            $counter++;
            $user_present = User::where('slug',$slug)->first();
        }

        return $slug;
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function categories(){
        return $this->belongsToMany('App\Category')
        ->withPivot('category_id', 'user_id');
    }
}
