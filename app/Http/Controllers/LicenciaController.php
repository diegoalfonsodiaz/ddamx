<?php

namespace App\Http\Controllers;

use App\Licencia;
use Illuminate\Http\Request;
use App\Solicitud;
use App\Estadolicencia;
use App\Tipovia;
use DB;
use Barryvdh\DomPDF\Facade as PDF;

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
    public function show($id)
    {
        $licencia=DB::table('licencias')
        ->leftjoin('estadolicencias','licencias.estadolicencia_id','=','estadolicencias.id')
        ->leftjoin('tipovias','licencias.tipovia_id','=','tipovias.id')
        ->leftjoin('solicituds','licencias.solicitudfactibilidad_id','=','solicituds.id')
        ->select('licencias.numerolicencia as numerolicencia','licencias.fechaautorizacion as fechaautorizacion','licencias.recibo as recibo',
        'licencias.monto as monto', 'licencias.derecho as derecho','licencias.remocion as remocion','licencias.fechaconexion as fechaconexion',
        'estadolicencias.nombre as nombre','solicituds.codigoinmueble as codigoinmueble','tipovias.nombre as tipovia')
        ->where('licencias.id','=',$id)
        ->get();

        return view('licencia.detalle', [
            'licencia' => $licencia
        ]);
    }

    public function exportpdf($id)
        {
            $licencia=DB::table('licencias')
            ->leftjoin('solicituds','licencias.solicitudfactibilidad_id','=','solicituds.id')
            ->leftjoin('tipovias','licencias.tipovia_id','=','tipovias.id')
            ->leftjoin('ejecutors','solicituds.ejecutor_id','=','ejecutors.id')
            ->select('licencias.id','licencias.numerolicencia','licencias.recibo','licencias.monto',
            'licencias.derecho','licencias.remocion','licencias.fechaconexion',
            'licencias.fechaautorizacion',
            'licencias.estadolicencia_id','solicituds.id as idsolicitud','solicituds.direccionobra',
            'licencias.solicitudfactibilidad_id','solicituds.expediente',
            'solicituds.longitud','solicituds.ancho','solicituds.profundidad',
            'solicituds.diametrotubo','solicituds.diametrocolector','solicituds.numerofinca',
            'solicituds.numerofolio','solicituds.libro','solicituds.catastral',
            'solicituds.solvenciamunicipal','licencias.tipovia_id',
            'tipovias.nombre as nombre_tipovia','solicituds.ejecutor_id','solicituds.persona_id')
            ->where('licencias.id','=',$id)
            ->get();
            foreach ($licencia as $licencias) {
                 $datos=DB::table('solicituds')
            ->leftjoin('personas','solicituds.persona_id','personas.id')
            ->leftjoin('ejecutors','solicituds.ejecutor_id','ejecutors.id')
            ->select('personas.nombre as nombre_persona','personas.apellido','ejecutors.nombre as nombre_ejecutor',
            'ejecutors.direccion as direccion_ejecutor')
            ->where('solicituds.id','=',$licencias->idsolicitud)
            ->get();
            $nombrepdf=$licencias->numerolicencia;
            }  
           
        $pdf=PDF::loadView('licencia.pdf.licencia',compact('licencia','datos'));
         return $pdf->download($nombrepdf.'.pdf');
        //  return view('licencia.pdf.licencia',compact('licencia','datos'));
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

    public function historial($id)
    {
        

       $audits=Licencia::find($id)->audits;

      // print_r($audits);
       return view('licencia.historial', compact('audits'));       
    }
}
