<?php

namespace App\Http\Controllers;

use App\Frontend;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexinicio()
    {
        return view('front.inicio');
        //
    }
    public function indexciudadano()
    {
        return view('front.ciudadano.create');
        //
    }
    public function indexdenuncia()
    {
        return view('front.denunciaexterna');
        //
    }
    public function indexdpi()
    {
        return view('front.ciudadano.buscardpi');
        //
    }
    public function indexdpiestado()
    {
        return view('front.estado.buscardpiestado');
        //
    }

    public function indexcodigo()
    {
        return view('front.licencia.buscarcodigo');
        //
    }
    public function indexcontacto()
    {
        return view('front.contacto');
        //
    }
    public function indexlogin()
    {
        return view('front.login');
        //
    }
    public function indexsolicitudfinalizada()
    {
        return view('front.ciudadano.solicitudfinalizada');
        //
    }
    public function indexnosotros()
    {
        return view('front.nosotros');
        //
    }
    public function indexpreguntas()
    {
        return view('front.preguntas');
        //
    }

    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function show(Frontend $frontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontend $frontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frontend $frontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontend $frontend)
    {
        //
    }
}
