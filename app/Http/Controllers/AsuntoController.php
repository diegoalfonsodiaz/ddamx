<?php

namespace App\Http\Controllers;

use App\Asunto;
use Illuminate\Http\Request;

class AsuntoController extends Controller
{
    public function index()
    {
        $asunto=Asunto::all()->where('estado','1');
        return view ('asunto.index');
    }
    public function create(Request $request)
    {
        $asunto = Asunto::where('estado',1)->get();
        return view('asunto.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
        ]);
  
        Product::create($request->all());
   
        return redirect()->route('asunto.index')
                        ->with('success','Asunto creado');
    }

    
    public function show($id)
    {
        $asunto=Asunto::findOrFail($id);
        return view('curso.show');
    }

    
    public function edit($id)
    {
        $asunto=Asunto::findOrFail($id);
        return view('asunto.edit');

    }

  
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
            'estado' => "1",
        );
        Estadofactibilidad::where('id', $id)->update($data);
        return redirect('asunto')->with('info', 'Se Actualizaron los datos correctamente');
    }

   
    public function destroy( $id)
    {
        $asunto = Asunto::findOrFail($id);
        $asunto->estado = '0';
        $asunto->update();
        return redirect()->route('asunto.index');
    }
    
}
