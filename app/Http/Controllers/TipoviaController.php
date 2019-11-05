<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipovia; 


class TipoviaController extends Controller
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
        $request->user()->autorizeRoles(['admin']);
        $tpv = Tipovia::orderBy('id', 'desc')->get();
        return view('tipovia.index', ['tipovias'=>$tpv]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
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
        return redirect('tipovia')->with('info', 'Datos ingresados correctamente');
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
    public function edit($id, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
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
        $request->user()->autorizeRoles(['admin']);
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
    return redirect('tipovia')->with('info', 'Datos actualizados correctamente');
    }

    public function activar(Tipovia $tipovia, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        $tipovia->estado='1';
        $tipovia->save();
        return redirect('tipovia')->with('info', 'Tipo de vía activado correctamente');
    }
    

    public function desactivar(Tipovia $tipovia, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        $tipovia->estado='0';
        $tipovia->save();
        return redirect('tipovia')->with('info', 'Tipo de vía desactivado correctamente');
    }

   
   

 
  
}
