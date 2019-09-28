<?php

namespace App\Http\Controllers;

use App\Ejecutor;
use Illuminate\Http\Request;
use App\Cargoejecutor;
use DB;

class EjecutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $ejecutor= DB::table('ejecutors as e')
        ->join('cargoejecutors as c', 'e.cargoejecutor_id','=', 'c.id')
        ->select('e.id', 'e.nombre', 'e.direccion', 'e.ornato', 'c.nombre as cargo')
        ->get();
        return view('ejecutor.index', ["ejecutor"=>$ejecutor])->with('i');
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargo=Cargoejecutor::all();
        return view("ejecutor.create",compact('cargo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ejecutor::create($request->all());
        return redirect()->route('ejecutor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ejecutor  $ejecutor
     * @return \Illuminate\Http\Response
     */
    public function show(Ejecutor $ejecutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ejecutor  $ejecutor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargoejecutor=Cargoejecutor::all();
        $ejecutor=Ejecutor::findOrFail($id);
        return view('ejecutor.edit', compact('cargoejecutor'),compact('ejecutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ejecutor  $ejecutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Ejecutor::findOrFail($id)->update($request->all());
         return redirect()->route('ejecutor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ejecutor  $ejecutor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ejecutor::findOrFail($id)->delete();
         return redirect()->route('ejecutor.index');
    }
}
