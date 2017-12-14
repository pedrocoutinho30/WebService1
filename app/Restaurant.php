<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Restaurant extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'restaurant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'morada'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public static function getAllRestaurants ()
    {
        return Restaurant::all();
    }

    public static function getRestaurantDetails ($id)
    {
        return Restaurant::find($id);
    }
}
