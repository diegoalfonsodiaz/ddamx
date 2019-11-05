<?php

namespace App\Http\Controllers;

use App\Cargoejecutor;
use Illuminate\Http\Request;
use App\Http\Requests\CargoEjecutorRequest;

class CargoejecutorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $cargoejecutor = Cargoejecutor::latest()->paginate(5);
  
        return view('cargoejecutor.index',compact('cargoejecutor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        return view('cargoejecutor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargoEjecutorRequest $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);
        
        $cargoejecutor = new Cargoejecutor;
        $cargoejecutor->nombre = $request->input('nombre');
        $cargoejecutor->estado = '1';
        $cargoejecutor->save();
        return redirect('cargoejecutor')->with('info', 'Datos ingresados correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargoejecutor  $cargoejecutor
     * @return \Illuminate\Http\Response
     */
    public function show(Cargoejecutor $cargoejecutor)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargoejecutor  $cargoejecutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargoejecutor $cargoejecutor, Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        return view('cargoejecutor.edit',compact('cargoejecutor'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargoejecutor  $cargoejecutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargoejecutor $cargoejecutor)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $request->validate([
            'nombre' => 'required',
        ]);
  
        $cargoejecutor->update($request->all());
  
        return redirect()->route('cargoejecutor.index')->with('info','Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargoejecutor  $cargoejecutor
     * @return \Illuminate\Http\Response
     */
    public function destroy( Cargoejecutor $cargoejecutor,Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $cargoejecutor->delete();
        return redirect()->route('cargoejecutor.index')
                        ->with('info','Cargo de ejecutor eliminado');
    }
    public function desactivar(Cargoejecutor $cargoejecutor, Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

     
        $cargoejecutor->estado='0';
        $cargoejecutor->save();
        return redirect(route('cargoejecutor.index'))->with('flash', 'Cargo Ejecutor desactivado correctamente');
    }

    public function activar(Cargoejecutor $cargoejecutor, Request $request)
    {
        
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);
        $cargoejecutor->estado='1';
        $cargoejecutor->save();
        return redirect(route('cargoejecutor.index'))->with('flash', 'Cargo Ejecutor activado correctamente');
    }
}
