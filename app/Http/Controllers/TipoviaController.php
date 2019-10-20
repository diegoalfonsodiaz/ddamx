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
        $vt = Tipovia::find($id);
        return view('tipovia.actualizar', [
            'tpv' => $vt
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
            'nombre'=>'required',
            'descripcion'=>'required'
        ]
    );
    $data = array(
        'nombre' => $request->input('nombre'),
        'descripcion' => $request->input('descripcion'),
    );
    Tipovia::where('id', $id)->update($data);
    return redirect('tipovia')->with('info', 'Registros Actualizados correctamente');
    }

    public function activar(Tipovia $tipovia, Request $request)
    {
        $tipovia->estado='1';
        $tipovia->save();
        return redirect('tipovia')->with('info', 'Estado Activado correctamente');
    }
    

    public function desactivar(Tipovia $tipovia, Request $request)
    {
        $tipovia->estado='0';
        $tipovia->save();
        return redirect('tipovia')->with('info', 'Estado desactivado correctamente');
    }

   
   

 
  
}
