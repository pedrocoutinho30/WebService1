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

    public function delete($id) {
        DB::table('ementas')->where('id','==',$id)->delete();
    }

    public function update(Request $request, $id) {
        DB::table('ementas')
            ->where('id', $id)
            ->update(['ementa' => 1, 'preco' => 0]);




        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $customer = $this->customer->query()->find($id);
        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->save();
        return redirect()->route('customer.index');
    }
}
