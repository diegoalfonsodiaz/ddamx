<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
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
    public function solicitardpiestado(Request $request)
    {
        $this->Validate($request, [
            'dpi' => 'required',
            recaptchaFieldName() => recaptchaRuleName()
            
        ]);

        $solicitud=DB::table('solicituds')
        ->join('personas','personas.id','=','solicituds.persona_id')
        ->join('estadofactibilidads','solicituds.estadofactibilidad_id','=','estadofactibilidads.id')
        ->select('solicituds.id','personas.nombre','personas.apellido','personas.dpi','solicituds.fechasolicitud','solicituds.direccionobra','solicituds.codigoinmueble','estadofactibilidads.nombre as nombre_estadofactibilidad')
        ->where('personas.dpi','=', $request->dpi) 
        ->get();

        return view('front.estado.estadofactibilidadexterno', ["solicitud"=>$solicitud])->with('i');
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
