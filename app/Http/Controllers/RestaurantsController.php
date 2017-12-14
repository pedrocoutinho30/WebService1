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
        $restaurants = Restaurant::getAllRestaurants();

        return response()->json($restaurants);
    }

    public function getDetails($id)
    {
        $restaurants = Restaurant::getRestaurantDetails($id);

        return response()->json($restaurants);
    }
}
