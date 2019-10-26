<?php

namespace App\Http\Controllers;
use App\Denuncia;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
    $fecha_actual = date("Y-m-d");
//resto 1 día
$fecha=date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
         $consulta= DB::table('denuncias')
         ->select('denuncias.id')
         ->where('denuncias.fecha','=',$fecha)
         ->count();
        // print_r($fecha);
//-------------------------------------------------------------------------
        //consulta personas activas
        $consultapersona= DB::table('personas')
        ->select('personas.id')
      ->where('personas.estado','=','1')
      ->count();
     
//----------------------------------------------------------------------------
        $consultapersonadesac= DB::table('personas')
        ->select('personas.id')
        ->where('personas.estado','=','0')
        ->count();
//----------------------------------------------------------------------------
        $consultasolicitud= DB::table('solicituds')
        ->select('solucituds.id')
        ->where('solicituds.estadofactibilidad_id','=','2')
        ->count();
//----------------------------------------------------------------------------
        //consulta Solicitud no factibles
        $consultasolicitudnofac= DB::table('solicituds')
        ->select('solucituds.id')
        ->where('solicituds.estadofactibilidad_id','=','3')
        ->count();
//-------------------------------------------------------------------------------
        $licencia= DB::table('licencias')
        ->select('licencias.id')
        ->where('licencias.estadolicencia_id','=','1')
        ->count();
//-------------------------------------------------------------------------------
        $licenciadesc= DB::table('licencias')
        ->select('licencias.id')
        ->where('licencias.estadolicencia_id','=','2')
        ->count();
        return view('admin.dashboard',compact('consulta','consultapersona','consultapersonadesac','consultasolicitud','consultasolicitudnofac','licencia','licenciadesc'));
        }

       
}
