<?php

namespace App\Http\Controllers;

use App\Cargoejecutor;
use Illuminate\Http\Request;

class CargoejecutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
  
        $cargoejecutor = new Cargoejecutor();
        $cargoejecutor->nombre = $request->input('nombre');
        $cargoejecutor->descipcion = $request->input('descripcion');
        $cargoejecutor->estado = '1';
        $cargoejecutor->save();
   
        return redirect('cargoejecutor')->with('info', 'Se registro Corectamente el cargo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
  
        Cargoejecutor::create($request->all());
   
        return redirect()->route('cargoejecutor.index')
                        ->with('success','Cargo Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargoejecutor  $cargoejecutor
     * @return \Illuminate\Http\Response
     */
    public function show(Cargoejecutor $cargoejecutor)
    {
        return view('cargoejecutor.show',compact('cargoejecutor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargoejecutor  $cargoejecutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargoejecutor $cargoejecutor)
    {
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
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
  
        $cargoejecutor->update($request->all());
  
        return redirect()->route('cargoejecutor.index')
                        ->with('success','Cargo ejecutor actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargoejecutor  $cargoejecutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(equest $request, Cargoejecutor $cargoejecutor)
    {
        $cargoejecutor->delete();
  
        return redirect()->route('cargoejecutor.index')
                        ->with('success','Cargo borrado');
    }
}
