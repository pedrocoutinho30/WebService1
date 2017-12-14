<?php

namespace App\Http\Controllers;

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
        $restaurants = Restaurant::all();

        foreach ($restaurants as $restaurant) {
            var_dump($restaurant->name);
        }
    }
}
