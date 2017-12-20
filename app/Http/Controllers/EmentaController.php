<?php

namespace App\Http\Controllers;

use App\Ementa;

class EmentasController extends Controller
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
        return response()->json(Ementa::getAllEmentas());
    }

    public function getDetails($id)
    {
        return response()->json(Ementa::getEmentasDetails($id));
    }
}
