<?php

namespace App\Http\Controllers;

use App\Tipoobra;
use Illuminate\Http\Request;

class TipoobraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $tipoobra =Tipoobra::all();        
       return view('tipoobra.index',compact('tipoobra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoobra.create');
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
        $this->validate($request,
            [
                'nombre'=>'required'
            ]
        );


        $tipoobra=new Tipoobra();
        $tipoobra->nombre=$request->nombre;
        $tipoobra->estado = '1';
        $tipoobra->save();
 
        return redirect(route('tipoobras.index'))->with('info', 'Datos ingresados correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipoobra  $tipoobra
     * @return \Illuminate\Http\Response
     */
    public function show(Tipoobra $tipoobra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipoobra  $tipoobra
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view('tipoobra.edit',compact('tipoobra'));
        //
        $ef = Tipoobra::find($id);
        return view('tipoobra.edit', [
            'tipoobra' => $ef
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipoobra  $tipoobra
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
        Tipoobra::where('id', $id)->update($data);
        return redirect('tipoobra')->with('info', 'Se Actualizaron los datos correctamente');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipoobra  $tipoobra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipoobra $tipoobra)
    {
        //
    }
    public function activar($id)
    {
        $ef = Tipoobra::find($id);
        return view('tipoobra.activar', [
            'tipoobra' => $ef
        ]);
    }
    public function habilitado($id, Request $request)
    {
        $data = array(
            'nombre' => $request->input('nombre'),
            'estado' => $request->input('estado')
        );
        Tipoobra::where('id', $id)->update($data);
        return redirect('tipoobra')->with('info', 'Se Habilitó el estado');
    }
    public function desactivar($id)
    {
        $ef = Tipoobra::find($id);
        return view('tipoobra.desactivar', [
            'tipoobra' => $ef
        ]);
    }
    public function deshabilitado($id, Request $request)
    {
        $data = array(
            'nombre' => $request->input('nombre'),
            'estado' => $request->input('estado')
        );
        Tipoobra::where('id', $id)->update($data);
        return redirect('tipoobra')->with('info', 'Se Desabilito el estado');
    }
}
