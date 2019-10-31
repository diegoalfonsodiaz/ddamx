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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        $tipoobra =Tipoobra::orderBy('id', 'desc')->get();        
        return view('tipoobra.index',compact('tipoobra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
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
        $request->user()->autorizeRoles(['admin']);
        $this->validate($request,
            [
                'nombre'=>'required'
            ]
        );


        $tipoobra=new Tipoobra();
        $tipoobra->nombre=$request->nombre;
        $tipoobra->estado = '1';
        $tipoobra->save();
 
        return redirect(route('tipoobras.index'))->with('flash', 'Datos ingresados correctamente');
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
    public function edit(Tipoobra $tipoobra,Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        return view('tipoobra.edit', compact('tipoobra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipoobra  $tipoobra
     * @return \Illuminate\Http\Response
     */
    public function update(Tipoobra $tipoobra, Request $request )
    {
        $request->user()->autorizeRoles(['admin']);
        $this->validate($request,
            [
                'nombre'=>'required'
            ]
        );
        $tipoobra->nombre=$request->nombre;
        $tipoobra->estado='1';
        $tipoobra->save();

             return redirect(route('tipoobras.index'))->with('flash', 'Datos actualizados correctamente');
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
  
    public function desactivar(Tipoobra $tipoobra, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
     
        $tipoobra->estado='0';
        $tipoobra->save();
        return redirect(route('tipoobras.index'))->with('flash', 'Tipo de obra desactivada correctamente');
    }

    public function activar(Tipoobra $tipoobra, Request $request)
    {
        
        $request->user()->autorizeRoles(['admin']);
        $tipoobra->estado='1';
        $tipoobra->save();
        return redirect(route('tipoobras.index'))->with('flash', 'Tipo de obra activada correctamente');
    }
    
}
