<?php

namespace App\Http\Controllers;

use App\Ejecutor;
use Illuminate\Http\Request;
use App\Cargoejecutor;
use DB;
use App\Http\Requests\EjecutorRequest;

class EjecutorController extends Controller
{

    public function index()
    {
        
        $ejecutor= DB::table('ejecutors as e')
        ->join('cargoejecutors as c', 'e.cargoejecutor_id','=', 'c.id')
        ->select('e.id', 'e.nombre', 'e.direccion', 'e.ornato', 'c.nombre as cargo','e.estado')
        ->get();
        return view('ejecutor.index', ["ejecutor"=>$ejecutor])->with('i');
        
        
    }


    public function create()
    {
        $cargo=Cargoejecutor::where('estado','=','1')->get();
        return view("ejecutor.create",compact('cargo'));
    }


    public function store(EjecutorRequest $request)
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

    public function desactivar(Ejecutor $ejecutor, Request $request)
    {
     
        $ejecutor->estado='0';
        $ejecutor->save();
        return redirect(route('ejecutor.index'))->with('flash', 'Ejecutor desactivado correctamente');
    }

    public function activar(Ejecutor $ejecutor, Request $request)
    {
     
        $ejecutor->estado='1';
        $ejecutor->save();
        return redirect(route('ejecutor.index'))->with('flash', 'Ejecutor activado correctamente');
    }

}
