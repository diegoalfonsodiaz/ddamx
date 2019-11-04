<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\licencia;
use App\Persona;
use App\Solicitud;
use App\denuncias;
use DB;

class ReportesController extends Controller
{
    //

    public function Reportelicencia(Request $request)
    {
     
        $licencia= DB::table('licencias')
        //persona
        ->leftjoin('solicituds', 'licencias.solicitudfactibilidad_id','=', 'solicituds.id')
        //ejecutor
        ->leftjoin('estadolicencias', 'licencias.estadolicencia_id','=', 'estadolicencias.id')
        //tipoobra
        ->leftjoin('tipovias', 'licencias.tipovia_id','=', 'tipovias.id')
        /////
        ->leftjoin('personas', 'solicituds.persona_id','=', 'personas.id')
        
        //
        ->select('solicituds.id as idsolicitud','licencias.id','licencias.numerolicencia', 'licencias.fechaautorizacion',
        'licencias.recibo','licencias.monto','licencias.derecho','licencias.remocion','licencias.fechaconexion',
        'solicituds.codigoinmueble as inmueble','estadolicencias.nombre as estadolicencia',
        'licencias.estadolicencia_id','tipovias.nombre as tipovia','personas.nombre as nombre_persona',
        'personas.apellido as apellido')
        ->whereBetween('licencias.fechaautorizacion', [$request->fechaautorizacion1,$request->fechaautorizacion2])
        ->get();
        $fecha1=$request->fechaautorizacion1;
        $fecha2=$request->fechaautorizacion2;
        return view('reportes.licenciaporfecha',compact('licencia','fecha1','fecha2'))->with('i');;
    }


    public function Reportesolicitud(Request $request)
    {

        $solicitud=DB::table('solicituds')
        ->leftjoin('ejecutors','solicituds.ejecutor_id','=','ejecutors.id')
        ->leftjoin('personas','solicituds.persona_id','=','personas.id')
        ->leftjoin('tipoobras','solicituds.tipoobra_id','=','tipoobras.id')
        ->leftjoin('estadofactibilidads','solicituds.estadofactibilidad_id','=','estadofactibilidads.id')
        ->select('personas.nombre as nombre_persona','personas.apellido','personas.dpi',
        'tipoobras.nombre as nombre_tipoobra','estadofactibilidads.nombre as nombre_estadofactibilidad',
        'ejecutors.nombre as nombre_ejecutor','ejecutors.direccion as direccionejecutor',
        'solicituds.direccionobra','solicituds.codigoinmueble',
        'solicituds.expediente','solicituds.expedienteinterno','solicituds.numerofinca',
        'solicituds.numerofolio',
        'solicituds.libro','solicituds.catastral','solicituds.solvenciamunicipal',
        'solicituds.observacion','solicituds.longitud','solicituds.ancho',
        'solicituds.profundidad','solicituds.fechasolicitud',
        'solicituds.diametrotubo','solicituds.diametrocolector',
        'solicituds.ejecutor_id','solicituds.persona_id',
        'solicituds.tipoobra_id','solicituds.estadofactibilidad_id')
        ->whereBetween('solicituds.fechasolicitud', [$request->fechaautorizacion1,$request->fechaautorizacion2])
        ->get();
        $fecha1=$request->fechaautorizacion1;
        $fecha2=$request->fechaautorizacion2;
      
        return view('reportes.solicitudesporfecha',compact('solicitud','fecha1','fecha2'))->with('i');;
        
    }


            public function Reportepersonas()
            {
                $personas = Persona::orderBy('id', 'desc')->get();
                    
                return view('reportes.listadopersonas',compact('personas'))->with('i');;
            }


  
            public function Reportedenuncias( Request $request)
            {
                $denuncia= DB::table('denuncias as d')
                    ->join('estadodenuncias as e', 'd.estadodenuncia_id','=', 'e.id')
                    ->select('d.id', 'd.descripcion', 'd.fecha',
                    'd.foto', 'e.descripcion as estado', 'e.estado as es',
                    'd.direccion', 'd.telefono')
                    ->whereBetween('d.fecha', [$request->fechaautorizacion1,$request->fechaautorizacion2])

                    ->get();
                    $fecha1=$request->fechaautorizacion1;
                    $fecha2=$request->fechaautorizacion2;
                   // return view('denuncia.index', ["denuncia"=>$denuncia])->with('i');
                    return view('reportes.denunciasporfecha',compact('denuncia','fecha1','fecha2'))->with('i');
            }
        

}


