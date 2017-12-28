<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Reserva;
use App\Restaurant;

class RestaurantsController extends Controller
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
        return response()->json(Restaurant::getAllRestaurants());

    }

    public function getDetails($id)
    {
        return response()->json(Restaurant::getRestaurantDetails($id));
    }

    public function show(){
        return view('show');
    }
}

