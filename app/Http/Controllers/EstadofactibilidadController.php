<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estadofactibilidad;

class EstadofactibilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ef = Estadofactibilidad::all();
        return view('estadofactibilidad.index', ['estadofactibilidads'=>$ef]);
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
                'nombre'=>'required'
            ]
        );

        $estadofacti = new Estadofactibilidad;
        $estadofacti->nombre = $request->input('nombre');
        $estadofacti->estado = '1';
        $estadofacti->save();
        return redirect('estadofactibilidad')->with('info', 'Se registro Corectamente el Estado de Factibilidad');
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
        $ef = Estadofactibilidad::find($id);
        return view('estadofactibilidad.actualizar', [
            'estadofacti' => $ef
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
                'nombre'=>'required'
            ]
        );

        $data = array(
            'nombre' => $request->input('nombre'),
            'estado' => $request->input('estado')
        );

        Estadofactibilidad::where('id', $id)->update($data);
        return redirect('estadofactibilidad')->with('info', 'Se Actualizaron los datos correctamente');
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
