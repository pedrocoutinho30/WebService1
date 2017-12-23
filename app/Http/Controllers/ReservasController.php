<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Reserva;
use App\Restaurant;

class ReservasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return response()->json(Reserva::getAllReservas());
    }

    public function getDetails($id)
    {
        return response()->json(Reserva::getReservasDetails($id));
    }

    public function delete($id)
    {
        Reserva::destroy($id);
        return response()->json(Reserva::getAllReservas());
    }

    public function update( $id)
    {
        $reserva = Reserva::find($id);
        $reserva->numeroClientes = 10;
        $reserva->save();
        return response()->json(Reserva::getReservasDetails($id));

    }
}
