<?php

namespace App\Http\Controllers;

use App\Ejecutor;
use Illuminate\Http\Request;
use App\Cargoejecutor;
use DB;

class EjecutorController extends Controller
{

    public function index()
    {
        
        $ejecutor= DB::table('ejecutors as e')
        ->join('cargoejecutors as c', 'e.cargoejecutor_id','=', 'c.id')
        ->select('e.id', 'e.nombre', 'e.direccion', 'e.ornato', 'c.nombre as cargo')
        ->get();
        return view('ejecutor.index', ["ejecutor"=>$ejecutor])->with('i');
        
        
    }


    public function create()
    {
        $cargo=Cargoejecutor::all();
        return view("ejecutor.create",compact('cargo'));
    }


    public function store(Request $request)
    {
        Ejecutor::create($request->all());
        return redirect()->route('ejecutor.index');
    }


    public function show(Ejecutor $ejecutor)
    {
        //
    }

    public function edit($id)
    {
        $cargoejecutor=Cargoejecutor::all();
        $ejecutor=Ejecutor::findOrFail($id);
        return view('ejecutor.edit', compact('cargoejecutor'),compact('ejecutor'));
    }


    public function update(Request $request, $id)
    {
        Ejecutor::findOrFail($id)->update($request->all());
         return redirect()->route('ejecutor.index');
    }


    public function destroy($id)
    {
        Ejecutor::findOrFail($id)->delete();
         return redirect()->route('ejecutor.index');
    }
}
