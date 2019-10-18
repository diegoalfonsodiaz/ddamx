<?php

namespace App\Http\Controllers;

use App\SolicitudExterna;
use App\Persona;
use App\Solicitud;
use App\Prueba;
use Illuminate\Http\Request;

class SolicitudExternaController extends Controller
{
    private $persona = null;
    public function __construct()
    {
        $persona = new Persona();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.ciudadano.solicitudexterna');
    }
    public function solicitud()
    {
        return view('front.ciudadano.solicitud');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $this->Validate($request, [
            'dpi' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            recaptchaFieldName() => recaptchaRuleName()
            
        ]);
       //return Persona::create($request->all());

       $persona=new Persona();
       $persona->dpi=$request->dpi;
       $persona->nombre=$request->nombre;
       $persona->apellido=$request->apellido;
       $persona->telefono=$request->telefono;
       $persona->correo=$request->correo;
       $persona->save();

       $solicitud= new Solicitud();
       $solicitud->persona_id = $persona->id;
       $solicitud->direccionobra = $request->input('direccionobra');
       $solicitud->codigoinmueble = $request->input('codigoinmueble');
       $solicitud->ejecutor_id = '1';
       $solicitud->tipoobra_id = '1';
       
       $solicitud->save();

       return redirect('inicio')->with('info', 'Se envio Corectamente tu solicitud');
       
    }
    public function findpersona()
    {
        return $this->persona
                    ->findByDpi('a');
    }

    public function prueba()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SolicitudExterna  $solicitudExterna
     * @return \Illuminate\Http\Response
     */
    public function show(SolicitudExterna $solicitudExterna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SolicitudExterna  $solicitudExterna
     * @return \Illuminate\Http\Response
     */
    public function edit(SolicitudExterna $solicitudExterna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SolicitudExterna  $solicitudExterna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitudExterna $solicitudExterna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SolicitudExterna  $solicitudExterna
     * @return \Illuminate\Http\Response
     */
    public function destroy(SolicitudExterna $solicitudExterna)
    {
        //
    }
}
