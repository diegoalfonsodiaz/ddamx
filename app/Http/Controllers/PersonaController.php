<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use Flash;
use Response;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    public function index()
    {
        //$personas=Persona::all();
       // return view('admin.personas.index',compact('personas'));


       $personas = Persona::orderBy('id', 'desc')->get();
        
       return view('personas.index',compact('personas'));
     
            
    }

    public function listarpersonas()
    {
        return datatables()
        ->eloquent(Persona::query('personas'))
        ->orderBy('id','desc')
        ->toJson();
    }

    public function create()
    {
        
        return view('admin.personas.create');
    }

    public function store(Request $request)
    {
        
       //return Persona::create($request->all());

       $persona=new Persona();
       $persona->dpi=$request->dpi;
       $persona->nombre=$request->nombre;
       $persona->apellido=$request->apellido;
       $persona->telefono=$request->telefono;
       $persona->correo=$request->correo;
       $persona->save();

       return redirect(route('personas.index'))->with('flash', 'Datos ingresados correctamente');

    }

    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    public function update(Persona $persona,Request $request)
    {
      
        //$persona=Persona::findOrFail($request->id);
        $persona->dpi=$request->dpi;
        $persona->nombre=$request->nombre;
        $persona->apellido=$request->apellido;
        $persona->telefono=$request->telefono;
        $persona->correo=$request->correo;
        $persona->estado='1';
        $persona->save();

             return redirect(route('personas.index'))->with('flash', 'Datos actualizados correctamente');

     // return back()->with('flash','Datos actualizados correctamente');
    }

    public function desactivar(Persona $persona, Request $request)
    {
     
        $persona->estado='0';
        $persona->save();
        return redirect(route('personas.index'))->with('flash', 'Persona desactivada correctamente');
    }

    public function activar(Persona $persona, Request $request)
    {
     
        $persona->estado='1';
        $persona->save();
        return redirect(route('personas.index'))->with('flash', 'Persona activada correctamente');
    }
}
