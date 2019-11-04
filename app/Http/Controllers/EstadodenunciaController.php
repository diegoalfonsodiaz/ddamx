<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estadodenuncia;

class EstadodenunciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);


       $estadodenuncias = Estadodenuncia::orderBy('id', 'desc')->get();
        
       return view('estadodenuncias.index',compact('estadodenuncias'));
     
            
    }

    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);

        return view('estadodenuncias.create');
    }

    public function store(Request $request)
    {
        
        $request->user()->autorizeRoles(['admin']);


        $this->Validate($request, [
            'descripcion' => 'required'
            
        ]);
       $estadodenuncias=new Estadodenuncia();
       $estadodenuncias->descripcion=$request->descripcion;
       $estadodenuncias->save();

       return redirect(route('estadodenuncias.index'))->with('flash', 'Datos ingresados correctamente');

    }

    public function edit(Estadodenuncia $estadodenuncia, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);


        return view('estadodenuncias.edit', compact('estadodenuncia'));
    }


    public function update(Estadodenuncia $estadodenuncia,Request $request)
    {
        $request->user()->autorizeRoles(['admin']);


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
        $request->user()->autorizeRoles(['admin']);


        $estadodenuncia->estado='0';
        $estadodenuncia->save();
        return redirect(route('estadodenuncias.index'))->with('flash', 'Estado de denuncia desactivado correctamente');
    }

    public function activar(Estadodenuncia $estadodenuncia, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);


        $estadodenuncia->estado='1';
        $estadodenuncia->save();
        return redirect(route('estadodenuncias.index'))->with('flash', 'Estado de denuncia activado correctamente');
    }
}
