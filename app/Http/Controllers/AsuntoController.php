<?php

namespace App\Http\Controllers;

use App\Asunto;
use Illuminate\Http\Request;

class AsuntoController extends Controller
{
    public function index()
    {
        $asunto = Asunto::orderBy('id', 'desc')->get();
  
        return view('asunto.index',compact('asunto'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(Request $request)
    {
        $asunto = Asunto::where('estado',1)->get();
        return view('asunto.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'nombre'=>'required',
            'descripcion'=>'required',
        ]
        );
    $asunto = new Asunto();
    $asunto->nombre = $request->input('nombre');
    $asunto->descripcion = $request->input('descripcion');
    $asunto->estado = '1';
    $asunto->save();
    return redirect('asunto')->with('info', 'Datos ingresados correctamente');
    }

    
    public function show($id)
    {
        $asunto=Asunto::findOrFail($id);
        return view('asunto.index');
    }

    
    public function edit(Asunto $asunto)
    {
        return view('asunto.edit',compact('asunto'));

    }

  
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'nombre'=>'required'
            ]
        );
        $data = array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion')
        );
        Asunto::where('id', $id)->update($data);
        return redirect('asunto')->with('info', 'Datos actualizados correctamente');
    }

   
    public function destroy( Asunto $asunto)
    {
        $asunto->delete();
        return redirect()->route('asunto.index')->with('info','Asunto de bitácora elimanado correctamente');
    }
    
}
