<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use App\Http\Requests\SolicitarDpiEstadoRequest;
use App\Http\Requests\SolicitarCodigoRequest;
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
    public function solicitardpiestado(SolicitarDpiEstadoRequest $request, SessionManager $sessionManager)
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
                ->select('solicituds.id','solicituds.fechasolicitud','solicituds.direccionobra','solicituds.codigoinmueble','estadofactibilidads.nombre as nombre_estadofactibilidad','solicituds.updated_at')
                ->where('personas.dpi','=', $request->dpi) 
                ->get();

                $cantidadestado =DB::table('solicituds')
                ->join('personas','personas.id','=','solicituds.persona_id')
                ->where('personas.dpi','=', $request->dpi,'AND', 'solicituds.estadofactibilidad_id','=',2) 
                ->count();
                if($cantidadestado >= 1){
                    $sessionManager->flash('mensajeestado', '¡Su solicitud de factibilidad de conexión ha sido aprobada! Sigue estos pasos para tramitar tu licencia:');
                    $sessionManager->flash('mensaje1', '1. Compra tu solicitud de licencia en los siguientes bancos Banrural y llénalo con tus datos:');
                    $sessionManager->flash('mensaje2', '    MUNICIPALIDAD XELA: 11 AVENIDA ENTRE 5ª. Y 6ª. CALLE ZONA 1, INTERIOR DEL PALACIO.');
                    $sessionManager->flash('mensaje3', '    PARQUE CENTRAL XELA: 12 AVENIDA 5-24 ZONA 1.');
                    $sessionManager->flash('mensaje4', '2. Presente el formulario de solicitud de licencia en la ventanilla de atención al público junto con la siguiente papelería:');
                    $sessionManager->flash('mensaje5', '   -Solvencia municipal original y reciente.');
                    $sessionManager->flash('mensaje6', '   -Formulario de acometida domiciliar (llenar datos a excepción del esquema), comprarlo en Banrural.');
                    $sessionManager->flash('mensaje7', '   -Fotocopiad de DPI, NIT y Ornato del propietario, y DPI y Ornato del Ejecutor de la obra (ambos ornatos adquiridos en la Municipalidad de Quetzaltenango).');
                    $sessionManager->flash('mensaje8', '   -Fotocopia de la licencia de construcción o certificación en original.');
                    $sessionManager->flash('mensaje9', 'Dirección de ventanilla de atención al público:');
                    $sessionManager->flash('mensaje10', '   10 Avenida entre 7 y 8 Calle Zona 1, Centro Comercial Municipal "El Centro".');
                    $sessionManager->flash('mensaje11', '   Quetzaltenango, Quetzaltenango.');
                    return view('front.estado.estadofactibilidadexterno', ["solicitud"=>$solicitud])->with('i');             
                }
                elseif($cantidadfac < 1){
                     return view('front.estado.estadofactibilidadexterno', ["solicitud"=>$solicitud])->with('i');             
                }


                }
            elseif($cantidadfac < 1){
                $sessionManager->flash('mensaje', '¡No ha realizado ninguna solicitud de factibilidad de conexión!');
                return view('front.estado.sinestado');
            }
    }
    public function solicitarcodigo(SolicitarCodigoRequest $request, SessionManager $sessionManager)
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
