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
        return view('reportes.licenciaporfecha',compact('licencia','fecha1','fecha2'));
    }
    public function listo()
    {
        
    }
}
