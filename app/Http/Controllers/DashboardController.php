<?php

namespace App\Http\Controllers;
use App\Denuncia;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function denuncia()
    {
    $fecha_actual = date("Y-m-d");
//resto 1 día
$fecha=date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
         $consulta= DB::table('denuncias')
         ->select('denuncias.id')
         ->where('denuncias.fecha','=',$fecha)
         ->count();
        // print_r($fecha);
       return view('admin.dashboard', ["consulta"=>$consulta])->with('i');
    }

}
