<?php

namespace App\Http\Controllers;

use App\Licencia;
use Illuminate\Http\Request;
use App\Solicitud;
use App\Estadolicencia;
use App\Tipovia;
use DB;

class LicenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licencia= DB::table('licencias as l')
        //persona
        ->join('solicituds as ef', 'l.solicitudfactibilidad_id','=', 'ef.id')
        //ejecutor
        ->join('estadolicencias as el', 'l.estadolicencia_id','=', 'el.id')
        //tipoobra
        ->join('tipovias as tpv', 'l.tipovia_id','=', 'tpv.id')
        
        //
        ->select('l.id','l.numerolicencia', 'l.fechaautorizacion','l.recibo','l.monto','l.derecho','l.remocion','l.fechaconexion','ef.codigoinmueble as inmueble','el.nombre as estadolicencia','tpv.nombre as tipovia')
        ->get();
        return view('licencia.index', ["licencia"=>$licencia])->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitud=Solicitud::where('estadofactibilidad_id','=','2')->get();
        $estado=Estadolicencia::where('estado','=','1')->get();
        $tipovia=Tipovia::where('estado','=','1')->get();
        return view('licencia.create',compact('solicitud','estado','tipovia'));
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
            'solicitudfactibilidad_id' => 'required|unique:licencias,solicitudfactibilidad_id',
            'numerolicencia' => 'required',
            'fechaautorizacion' => 'required',
            'tipovia_id' => 'required',
            'recibo' => 'required',
            'derecho' => 'required',
            'remocion' => 'required',
            'fechaconexion' => 'required',
            'monto' => 'required',
            'estadolicencia_id' => 'required',
            
        ]);
        Licencia::create($request->all());
        return redirect()->route('licencia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function show(Licencia $licencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud =Solicitud::where('estadofactibilidad_id','=','2')->get();
        $licencia=Licencia::findOrFail($id);
        $estado=Estadolicencia::where('estado','=','1')->get();
        $tipovia=Tipovia::where('estado','=','1')->get();
       
       return view('licencia.edit', compact('solicitud','estado','tipovia','licencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->Validate($request, [
            'solicitudfactibilidad_id' => 'required|unique:licencias,solicitudfactibilidad_id,'.$id.',id',
            'numerolicencia' => 'required',
            'fechaautorizacion' => 'required',
            'tipovia_id' => 'required',
            'recibo' => 'required',
            'derecho' => 'required',
            'remocion' => 'required',
            'fechaconexion' => 'required',
            'monto' => 'required',
            'estadolicencia_id' => 'required',
            
        ]);
        Licencia::findOrFail($id)->update($request->all());
        return redirect()->route('licencia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licencia $licencia)
    {
        //
    }
}
