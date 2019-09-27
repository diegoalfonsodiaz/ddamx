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
        $tipoobra = tipoobra::latest()->paginate(5);
  
        return view('tipoobra.index',compact('tipoobra'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        //$tipoobra = tipoobra::all()->where('estado','1');
  
        //return view('tipoobra.index');
        //
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
        //
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
    public function edit(Tipoobra $tipoobra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipoobra  $tipoobra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoobra $tipoobra)
    {
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
}
