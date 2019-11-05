<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use Flash;
use Response;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        //$personas=Persona::all();
       // return view('admin.personas.index',compact('personas'));

       $request->user()->autorizeRoles(['secretaria','operaciones','jefeoperaciones','admin']);
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

    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        return view('personas.create');
    }

    public function store(Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $this->Validate($request, [
            'dpi' => 'numeric|required|digits_between:13,13',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required'
            
        ]);
       //return Persona::create($request->all());

       $persona=new Persona();
       $persona->dpi=$request->dpi;
       $persona->nombre=$request->nombre;
       $persona->apellido=$request->apellido;
       $persona->telefono=$request->telefono;
       $persona->ornato=$request->ornato;
       $persona->correo=$request->correo;
       $persona->save();

       return redirect(route('personas.index'))->with('flash', 'Datos ingresados correctamente');

    }

    public function edit(Persona $persona,Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        return view('personas.edit', compact('persona'));
    }

    public function update(Persona $persona,Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $this->Validate($request, [
            'dpi' => 'numeric|required|digits_between:13,13',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required'
            
        ]);
        //$persona=Persona::findOrFail($request->id);
        $persona->dpi=$request->dpi;
        $persona->nombre=$request->nombre;
        $persona->apellido=$request->apellido;
        $persona->telefono=$request->telefono;
        $persona->ornato=$request->ornato;
        $persona->correo=$request->correo;
        $persona->estado='1';
        $persona->save();

             return redirect(route('personas.index'))->with('flash', 'Datos actualizados correctamente');

     // return back()->with('flash','Datos actualizados correctamente');
    }

    public function desactivar(Persona $persona, Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $persona->estado='0';
        $persona->save();
        return redirect(route('personas.index'))->with('flash', 'Persona desactivada correctamente');
    }

    public function activar(Persona $persona, Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

     
        $persona->estado='1';
        $persona->save();
        return redirect(route('personas.index'))->with('flash', 'Persona activada correctamente');
    }
}
