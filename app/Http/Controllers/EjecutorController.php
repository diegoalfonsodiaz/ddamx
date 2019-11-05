<?php

namespace App\Http\Controllers;

use App\Ejecutor;
use Illuminate\Http\Request;
use App\Cargoejecutor;
use DB;
use App\Http\Requests\EjecutorRequest;

class EjecutorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->autorizeRoles(['secretaria','operaciones','jefeoperaciones','admin']);

        $ejecutor= DB::table('ejecutors as e')
        ->join('cargoejecutors as c', 'e.cargoejecutor_id','=', 'c.id')
        ->select('e.id', 'e.nombre', 'e.direccion', 'e.ornato', 'c.nombre as cargo','e.estado')
        ->get();
        return view('ejecutor.index', ["ejecutor"=>$ejecutor])->with('i');
        
        
    }


    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $cargo=Cargoejecutor::where('estado','=','1')->get();
        return view("ejecutor.create",compact('cargo'));
    }


    public function store(EjecutorRequest $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);
        Ejecutor::create($request->all());
        return redirect()->route('ejecutor.index');
    }


    public function show(Ejecutor $ejecutor)
    {
        //
    }

    public function edit($id,Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $cargoejecutor=Cargoejecutor::all();
        $ejecutor=Ejecutor::findOrFail($id);
        return view('ejecutor.edit', compact('cargoejecutor'),compact('ejecutor'));
    }


    public function update(Request $request, $id)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        Ejecutor::findOrFail($id)->update($request->all());
         return redirect()->route('ejecutor.index');
    }


    public function destroy($id,Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        Ejecutor::findOrFail($id)->delete();
         return redirect()->route('ejecutor.index');
    }

    public function desactivar(Ejecutor $ejecutor, Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $ejecutor->estado='0';
        $ejecutor->save();
        return redirect(route('ejecutor.index'))->with('flash', 'Ejecutor desactivado correctamente');
    }

    public function activar(Ejecutor $ejecutor, Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $ejecutor->estado='1';
        $ejecutor->save();
        return redirect(route('ejecutor.index'))->with('flash', 'Ejecutor activado correctamente');
    }

}
