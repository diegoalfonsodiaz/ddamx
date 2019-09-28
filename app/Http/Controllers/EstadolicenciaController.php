<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstadoLicencia;

class EstadolicenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $el = Estadolicencia::all();
        return view('estadolicencia.index', ['estadolicencias'=>$el]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,
            [
                'nombre'=>'required',
                'descripcion'=>'required'
            ]
        );

        $estadolicen = new Estadolicencia;
        $estadolicen->nombre = $request->input('nombre');
        $estadolicen->descripcion = $request->input('descripcion');
        $estadolicen->save();
        return redirect('estadolicencia')->with('info', 'Registro Completado estado Licencia');
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
        $el = Estadolicencia::find($id);
        return view('estadolicencia.detalle', [
            'estadolicen' => $el
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $el = Estadolicencia::find($id);
        return view('estadolicencia.actualizar', [
            'estadolicen' => $el
        ]);
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
        $this->validate($request,
            [
                'nombre'=>'required',
                'descripcion'=>'required'
            ]
        );

        $data = array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion')
        );

        Estadolicencia::where('id', $id)->update($data);
        return redirect('estadolicencia')->with('info', 'Actualización éxitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function eliminar($id)
    {
        $el = Estadolicencia::find($id);
        return view('estadolicencia.eliminar', [
            'estadolicen' => $el
        ]);
    }
     
    public function destroy($id)
    {
        Estadolicencia::find($id)->delete();
        return redirect('estadolicencia')->with('info','Registro eliminado satisfactoriamente');
    }
}
