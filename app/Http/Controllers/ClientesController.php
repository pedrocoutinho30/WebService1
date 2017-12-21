<?php

namespace App\Http\Controllers;

use App\Cliente;

class ClientesController extends Controller
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
        return response()->json(Cliente::getAllClientes());
    }

    public function getDetails($id)
    {
        return response()->json(Cliente::getClienteDetails($id));
    }

    public function delete($id)
    {
        Cliente::destroy($id);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nome = 'Tony';
        $cliente->save();
        }
}