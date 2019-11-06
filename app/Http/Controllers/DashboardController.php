<?php

namespace App\Http\Controllers;
use App\Denuncia;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(Request $request)
    {
        $request->user()->autorizeRoles(['secretaria','operaciones','jefeoperaciones','admin']);

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
      ->count();

//-------------------------------------------------------------------------
        //consulta contactos
        $contactos= DB::table('contactos')
        ->select('contactos.id')
      ->count();
     
     
//----------------------------------------------------------------------------
        $consultapersonadesac= DB::table('personas')
        ->select('personas.id')
        ->where('personas.estado','=','0')
        ->count();
//----------------------------------------------------------------------------
        $consultasolicitud= DB::table('solicituds')
        ->select('solucituds.id')
        ->count();
 //----------------------------------------------------------------------------
        //consulta Solicitud Sin procesar
        $solsinprocesar= DB::table('solicituds')
        ->select('solucituds.id')
        ->where('solicituds.estadofactibilidad_id','=','1')
        ->count();

 //consulta Solicitud factible
        $solicitudfac= DB::table('solicituds')
        ->select('solucituds.id')
        ->where('solicituds.estadofactibilidad_id','=','2')
        ->count();
//----------------------------------------------------------------------------
        //consulta Solicitud no factibles
        $consultasolicitudnofac= DB::table('solicituds')
        ->select('solucituds.id')
        ->where('solicituds.estadofactibilidad_id','=','3')
        ->count();

//----------------------------------------------------------------------------
        //consulta Solicitud en proceso
        $solproceso= DB::table('solicituds')
        ->select('solucituds.id')
        ->where('solicituds.estadofactibilidad_id','=','4')
        ->count();

//-------------------------------------------------------------------------------
        $licencia= DB::table('licencias')
        ->select('licencias.id')
        ->count();
//-------------------------------------------------------------------------------
        $licenciadesc= DB::table('licencias')
        ->select('licencias.id')
        ->where('licencias.estadolicencia_id','=','2')
        ->count();

//-----------------------------------------------------------------------------
        $licenciaemision= DB::table('licencias')
        ->join('estadolicencias','licencias.estadolicencia_id','=','estadolicencias.id')
        ->select('licencias.id','estadolicencias.nombre')
        ->where('licencias.estadolicencia_id','=','1')
        ->count();



        $fecha_actual = date("Y-m-d");
//sumo 1 día
//$fechamas= date("d-m-Y",strtotime($fecha_actual."+ 1 days")); 
//resto 1 día
$fechamenos= date("Y-m-d",strtotime($fecha_actual."- 1 days")); 

        $denuncia=DB::table('denuncias')
        ->join('estadodenuncias','denuncias.estadodenuncia_id','=','estadodenuncias.id')
        ->select('denuncias.descripcion','denuncias.fecha','denuncias.direccion','estadodenuncias.descripcion as d')
        ->where('estadodenuncia_id','=','1')
        ->whereBetween('fecha', [$fechamenos,$fecha_actual])
        ->get();
        //print_r($denuncia);
        return view('admin.dashboard',compact('consulta','consultapersona',
        'consultapersonadesac','consultasolicitud',
        'consultasolicitudnofac','licencia','licenciadesc',
        'denuncia', 'contactos', 'solsinprocesar','solicitudfac','solproceso','licenciaemision'));
       
        }


      
       
}
