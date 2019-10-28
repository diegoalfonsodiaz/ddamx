<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use App\Solicitud;

class EstadoFactibilidadExternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.estado.estadofactibilidadexterno');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function solicitardpiestado(Request $request, SessionManager $sessionManager)
    {
        $this->Validate($request, [
            'dpi' => 'required',
            recaptchaFieldName() => recaptchaRuleName()
        ]);

        
            $cantidadfac =DB::table('solicituds')
            ->join('personas','personas.id','=','solicituds.persona_id')
            ->where('personas.dpi','=', $request->dpi) 
            ->count();

   
            if($cantidadfac >= 1){
                $solicitud=DB::table('solicituds')
                ->join('personas','personas.id','=','solicituds.persona_id')
                ->join('estadofactibilidads','solicituds.estadofactibilidad_id','=','estadofactibilidads.id')
                ->select('solicituds.id','personas.nombre','personas.apellido','personas.dpi','solicituds.fechasolicitud','solicituds.direccionobra','solicituds.codigoinmueble','estadofactibilidads.nombre as nombre_estadofactibilidad')
                ->where('personas.dpi','=', $request->dpi) 
                ->get();
                return view('front.estado.estadofactibilidadexterno', ["solicitud"=>$solicitud])->with('i');
            }
            elseif($cantidadfac < 1){
                $sessionManager->flash('mensaje', '!No a realizado ninguna solicitud de factibilidad de conexión!');
                return view('front.estado.sinestado');
            }
    }
    public function solicitarcodigo(Request $request, SessionManager $sessionManager)
    {
        $this->Validate($request, [
            'codigo' => 'required',
            recaptchaFieldName() => recaptchaRuleName()
        ]);

        $cantidad =DB::table('licencias')
        ->join('solicituds','licencias.solicitudfactibilidad_id','=','solicituds.id')
        ->join('personas','personas.id','=','solicituds.persona_id')
        ->where('solicituds.codigoinmueble','=', $request->codigo) 
        ->count();

        if($cantidad >= 1){
            $sessionManager->flash('mensajetipo', 'Estado de licencia');

            $solicitud=DB::table('licencias')
            ->join('solicituds','licencias.solicitudfactibilidad_id','=','solicituds.id')
            ->join('personas','personas.id','=','solicituds.persona_id')
            ->join('estadofactibilidads','solicituds.estadofactibilidad_id','=','estadofactibilidads.id')
            ->join('estadolicencias','estadolicencias.id','=','licencias.estadolicencia_id')
            ->select('solicituds.id','personas.nombre','personas.apellido','personas.dpi','solicituds.fechasolicitud','solicituds.direccionobra','solicituds.codigoinmueble','estadofactibilidads.nombre as nombre_estadofactibilidad','estadolicencias.nombre as nombre_estadolicencia')
            ->where('solicituds.codigoinmueble','=', $request->codigo) 
            ->get();
    
            return view('front.licencia.estadolicenciaexterno', ["solicitud"=>$solicitud])->with('i');
        }
        elseif($cantidad < 1){
                $sessionManager->flash('mensaje', '!No a tramitado su licencia o no a realizado ninguna solicitud de factibilidad de conexión!');
                return view('front.estado.sinestado');
            }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
