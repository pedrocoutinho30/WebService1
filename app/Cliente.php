<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Cliente extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'clientes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome'

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

    public static function getAllClientes ()
    {
        return Cliente::all();
    }

    public static function getClienteDetails ($id)
    {
        return Cliente::find($id);
    }

    public static function getRandomCliente()
    {
        return Cliente::find(rand (1, Cliente::count()))->id;
    }

}
