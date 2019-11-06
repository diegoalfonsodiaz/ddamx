<?php

namespace App\Http\Controllers;

use DB;
use App\SolicitudExterna;
use App\Persona;
use App\Solicitud;
use App\Prueba;
use Faker\Provider\nl_NL\Person;
use Illuminate\Http\Request;
use App\Http\Requests\SolicitudDpiRequest;


class SolicitudExternaController extends Controller
{
    public function index()
    {
        return view('front.ciudadano.solicitudexterna');
    }
   
    public function solicitardpi(SolicitudDpiRequest $request)
    {
        $this->Validate($request, [
            'dpi' => 'required',
            recaptchaFieldName() => recaptchaRuleName()
           
        ]);
        
        $cantidad= DB::table('personas')->where('dpi', $request->dpi)->count();
   
        if($cantidad >= 1){
            $personas = DB::table('personas')->where('dpi', $request->dpi)->get();
            return view('front.ciudadano.solicitudexterna',compact('personas'));
        }
        else{
            $dpi = $request->dpi;
            return view('front.ciudadano.persona_y_solicitud',compact('dpi'));
        }
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
            'dpi'=>'required',
            
        ]);
       //return Persona::create($request->all());
       $cantidad= DB::table('personas')->where('dpi', $request->dpi)->count();
   
       if($cantidad >= 1){
        $id_persona = DB::table('personas')->where('dpi', $request->dpi)->value('id');

       $solicitud= new Solicitud();
       $solicitud->persona_id = $id_persona;
       $solicitud->direccionobra = $request->input('direccionobra');
       $solicitud->codigoinmueble = $request->input('codigoinmueble');
       $solicitud->ejecutor_id = '1';
       $solicitud->tipoobra_id = '1';
       
       $solicitud->save();

       return view('front.ciudadano.solicitudfinalizada');

       }
       else{
       $persona=new Persona();
       $persona->dpi=$request->dpi;
       $persona->nombre=$request->nombre;
       $persona->apellido=$request->apellido;
       $persona->telefono=$request->telefono;
       $persona->ornatos=$request->ornato;
       $persona->correo=$request->correo;
       $persona->save();

       $solicitud= new Solicitud();
       $solicitud->persona_id = $persona->id;
       $solicitud->direccionobra = $request->input('direccionobra');
       $solicitud->codigoinmueble = $request->input('codigoinmueble');
       $solicitud->ejecutor_id = '1';
       $solicitud->tipoobra_id = '1';
       
       $solicitud->save();

       return view('front.ciudadano.solicitudfinalizada');
        }      
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
