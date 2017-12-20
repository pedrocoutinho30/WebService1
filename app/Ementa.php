<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Ementa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'ementas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ementa',
        'tipoComida',
        'preco'

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

    public static function getAllEmentas ()
    {
        return Ementa::all();
    }

    public static function getEmentaDetails ($id)
    {
        return Ementa::find($id);
    }

    public static function getRandomEmenta()
    {
        return Ementa::find(rand (1, Ementa::count()))->id;
    }

}
