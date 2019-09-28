<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipovia; 


class TipoviaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpv = Tipovia::all();
        return view('tipovia.index', ['tipovias'=>$tpv]);
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

        $tpv = new Tipovia;
        $tpv->nombre = $request->input('nombre');
        $tpv->descripcion = $request->input('descripcion');
        $tpv->estado = '1';
        $tpv->save();
        return redirect('tipovia')->with('info', 'Registro éxitoso Tipo vía');
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
    public function update(Request $request)
    {
        //
    }

    public function desactivar(Request $request)
    {
        //
    }

    public function activar(Request $request)
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
