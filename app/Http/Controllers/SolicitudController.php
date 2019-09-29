<?php

namespace App\Http\Controllers;

use DB;
use App\Solicitud;
use Illuminate\Http\Request;
use App\Persona;
use App\Estadofactibilidad;
use App\Ejecutor;
use App\Tipoobra;

class SolicitudController extends Controller
{
 
    public function index()
    {
        $solicitud= DB::table('solicituds as s')
        //persona
        ->join('personas as p', 's.persona_id','=', 'p.id')
        //ejecutor
        ->join('ejecutors as e', 's.ejecutor_id','=', 'e.id')
        //tipoobra
        ->join('tipoobras as t', 's.tipoobra_id','=', 't.id')
        //estado
        ->join('estadofactibilidads as f', 's.estadofactibilidad_id','=', 'f.id')
        //
        ->select('s.id','p.nombre as persona','s.direccionobra','s.codigoinmueble','s.expediente','s.expedienteinterno','s.fechasolicitud','e.nombre as ejecutor','f.nombre as estado')
        ->get();
        return view('solicitud.index', ["solicitud"=>$solicitud])->with('i');
    }


    public function create()
    {
        $ejecutor=Ejecutor::all();
        $persona=Persona::all();
        $estado=Estadofactibilidad::all();
        $tipoobra=Tipoobra::all();
        return view('solicitud.create',compact('ejecutor','persona','estado', 'tipoobra'));
    }

    public function store(Request $request)
    {
        Solicitud::create($request->all());
        return redirect()->route('solicitud.index');
    }


    public function show(Solicitud $solicitud)
    {
        //
    }

    public function edit($id)
    {
        $solicitud=Solicitud::findOrFail($id);
        $ejecutor=Ejecutor::all();
        $persona=Persona::all();
        $estado=Estadofactibilidad::all();;
        $tipoobra=Tipoobra::all();
        return view('solicitud.edit', compact('solicitud','ejecutor','persona','estado','persona','tipoobra'));
    }


    public function update(Request $request, $id)
    {
        Solicitud::findOrFail($id)->update($request->all());
        return redirect()->route('solicitud.index');
    }

    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
