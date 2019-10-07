<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estadodenuncia;

class EstadodenunciaController extends Controller
{
    public function index()
    {
        


       $estadodenuncias = Estadodenuncia::orderBy('id', 'desc')->get();
        
       return view('estadodenuncias.index',compact('estadodenuncias'));
     
            
    }

    public function create()
    {
        
        return view('estadodenuncias.create');
    }

    public function store(Request $request)
    {
        
      
        $this->Validate($request, [
            'descripcion' => 'required'
            
        ]);
       $estadodenuncias=new Estadodenuncia();
       $estadodenuncias->descripcion=$request->descripcion;
       $estadodenuncias->save();

       return redirect(route('estadodenuncias.index'))->with('flash', 'Datos ingresados correctamente');

    }

    public function edit(Estadodenuncia $estadodenuncia)
    {
        return view('estadodenuncias.edit', compact('estadodenuncia'));
    }


    public function update(Estadodenuncia $estadodenuncia,Request $request)
    {
        $this->Validate($request, [
            'descripcion' => 'required'
            
        ]);

        $estadodenuncia->descripcion=$request->descripcion;
        $estadodenuncia->estado='1';
        $estadodenuncia->save();

             return redirect(route('estadodenuncias.index'))->with('flash', 'Datos actualizados correctamente');

    }


    public function desactivar(Estadodenuncia $estadodenuncia, Request $request)
    {
     
        $estadodenuncia->estado='0';
        $estadodenuncia->save();
        return redirect(route('estadodenuncias.index'))->with('flash', 'Estado desactivado correctamente');
    }

    public function activar(Estadodenuncia $estadodenuncia, Request $request)
    {
     
        $estadodenuncia->estado='1';
        $estadodenuncia->save();
        return redirect(route('estadodenuncias.index'))->with('flash', 'Estado activado correctamente');
    }
}
