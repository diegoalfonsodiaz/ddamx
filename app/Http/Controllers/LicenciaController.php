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
    public function create(Request $request)
    {
        $request->user()->autorizeRoles('secretaria');
        $solicitud=Solicitud::all();
        $estado=Estadolicencia::all();
        $tipovia=Tipovia::all();
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
    public function edit(Licencia $licencia,$id)
    {
        $solicitud =Solicitud::all();
        $licencia=Licencia::findOrFail($id);
        $estado=Estadolicencia::all();
        $tipovia=Tipovia::all();
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
