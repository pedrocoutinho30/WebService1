<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Reserva extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'reservas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id',
        'ementa_id',
        'horaReserva',
        'numeroClientes'

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

    public static function getAllReservas ()
    {
        return Reserva::all();
    }

    public static function getReservasDetails ($id)
    {
        return Reserva::find($id);
    }

}
