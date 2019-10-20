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
        $solicitud=DB::table('solicituds')
        ->leftjoin('ejecutors','solicituds.ejecutor_id','=','ejecutors.id')
        ->leftjoin('personas','solicituds.persona_id','=','personas.id')
        ->leftjoin('tipoobras','solicituds.tipoobra_id','=','tipoobras.id')
        ->leftjoin('estadofactibilidads','solicituds.estadofactibilidad_id','=','estadofactibilidads.id')
        ->select('personas.nombre as nombre_persona','personas.apellido','personas.dpi',
        'tipoobras.nombre as nombre_tipoobra','estadofactibilidads.nombre as nombre_estadofactibilidad',
        'ejecutors.nombre as nombre_ejecutor','ejecutors.direccion as direccionejecutor','solicituds.direccionobra','solicituds.codigoinmueble',
        'solicituds.expediente','solicituds.expedienteinterno','solicituds.numerofinca',
        'solicituds.numerofolio',
        'solicituds.libro','solicituds.catastral','solicituds.solvenciamunicipal',
        'solicituds.observacion','solicituds.longitud','solicituds.ancho',
        'solicituds.profundidad','solicituds.fechasolicitud',
        'solicituds.diametrotubo','solicituds.diametrocolector',
        'solicituds.ejecutor_id','solicituds.persona_id',
        'solicituds.tipoobra_id','solicituds.estadofactibilidad_id','solicituds.id')
        ->orderBy('solicituds.id','desc')
        ->get();
        return view('solicitud.index', ["solicitud"=>$solicitud])->with('i');
    }


    public function create()
    {
        
        $ejecutor=Ejecutor::where('estado','=','1')->get();
        $persona=Persona::where('estado','=','1')->get();
        $estado=Estadofactibilidad::where('estado','=','1')->get();
        $tipoobra=Tipoobra::where('estado','=','1')->get();
        return view('solicitud.create',compact('ejecutor','persona','estado', 'tipoobra'));


    }

    public function store(Request $request)
    {
        $this->Validate($request, [
            'direccionobra' => 'required',
            'persona_id' => 'required'
            
        ]);

        Solicitud::create($request->all());
        return redirect()->route('solicitud.index')->with('flash', 'Datos ingresados correctamente');;
    }


    public function show($id)
    {
        //$solicitud = Solicitud::find($id);
       

        $solicitud=DB::table('solicituds')
        ->leftjoin('ejecutors','solicituds.ejecutor_id','=','ejecutors.id')
        ->leftjoin('personas','solicituds.persona_id','=','personas.id')
        ->leftjoin('tipoobras','solicituds.tipoobra_id','=','tipoobras.id')
        ->leftjoin('estadofactibilidads','solicituds.estadofactibilidad_id','=','estadofactibilidads.id')
        ->select('personas.nombre as nombre_persona','personas.apellido','personas.dpi',
        'tipoobras.nombre as nombre_tipoobra','estadofactibilidads.nombre as nombre_estadofactibilidad',
        'ejecutors.nombre as nombre_ejecutor','ejecutors.direccion as direccionejecutor','solicituds.direccionobra','solicituds.codigoinmueble',
        'solicituds.expediente','solicituds.expedienteinterno','solicituds.numerofinca',
        'solicituds.numerofolio',
        'solicituds.libro','solicituds.catastral','solicituds.solvenciamunicipal',
        'solicituds.observacion','solicituds.longitud','solicituds.ancho',
        'solicituds.profundidad','solicituds.fechasolicitud',
        'solicituds.diametrotubo','solicituds.diametrocolector',
        'solicituds.ejecutor_id','solicituds.persona_id',
        'solicituds.tipoobra_id','solicituds.estadofactibilidad_id')
        ->where('solicituds.id','=',$id)
        ->get();
      
        return view('solicitud.detalle', [
            'solicitud' => $solicitud
        ]);
    
    }

    public function edit($id)
    {
        $solicitud = Solicitud::find($id);
        $persona=Persona::where('estado','=','1')->get();
        $ejecutor=Ejecutor::where('estado','=','1')->get();
        $estado=Estadofactibilidad::where('estado','=','1')->get();
        $tipoobra=Tipoobra::where('estado','=','1')->get();
        return view('solicitud.edit', compact('solicitud','ejecutor','persona','estado','persona','tipoobra'));
      
        
    }


    public function update(Request $request,$id)
    {
        $this->Validate($request, [
            'direccionobra' => 'required',
            'persona_id' => 'required'
            
        ]);

             Solicitud::findOrFail($id)->update($request->all());
        return redirect()->route('solicitud.index')->with('flash', 'Datos actualizados correctamente');;

    }

    public function destroy(Request $request)
    {
        //
    }
}