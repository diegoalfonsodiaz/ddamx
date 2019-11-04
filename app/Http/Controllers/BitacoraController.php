<?php

namespace App\Http\Controllers;

use App\Bitacora;
use App\Asunto;
use App\Licencia;
use App\User;
use Illuminate\Http\Request;
use DB;

class BitacoraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->autorizeRoles(['secretaria','operaciones','jefeoperaciones','admin']);

        $bitacora= DB::table('bitacoras as b')
        //persona
        ->leftjoin('users as u', 'b.user_id','=', 'u.id')
        //ejecutor
        ->leftjoin('asuntos as a', 'b.asunto_id','=', 'a.id')
        //tipoobra
        ->leftjoin('licencias as l', 'b.licencia_id','=', 'l.id')
        //
        ->select('b.id','b.fecha', 'u.name as user','l.numerolicencia as nlicencia','b.descripcion','a.nombre as asunto')
        ->orderBy('b.id','desc')
        ->get();
        return view('bitacora.index', ["bitacora"=>$bitacora])->with('i');
    }


    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $asunto=Asunto::all();
        $usuarios=User::all();
        $licencia=Licencia::all();
        return view('bitacora.create',compact('asunto','usuarios','licencia'));
    }

    public function store(Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        Bitacora::create($request->all());
        return redirect()->route('bitacora.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function show(Bitacora $bitacora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $asunto=Asunto::all();
        $bitacora=Bitacora::findOrFail($id);
        $user=User::all();
        $licencia=Licencia::all();
        return view('bitacora.edit', compact('asunto','licencia','user','bitacora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        Bitacora::findOrFail($id)->update($request->all());
        return redirect()->route('bitacora.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bitacora $bitacora)
    {
        //
    }
}
