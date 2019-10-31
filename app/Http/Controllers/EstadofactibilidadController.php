<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estadofactibilidad;

class EstadofactibilidadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $estadofactibilidades = Estadofactibilidad::orderBy('id', 'desc')->get();
        return view('estadofactibilidad.index',compact('estadofactibilidades'));
    }

    public function create(Request $request)
    {
        return view('estadofactibilidad.create');
    }

    public function store(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        $this->validate($request,
            [
                'nombre'=>'required|max:190'
            ]
        );
        $estadofactibilidades = new Estadofactibilidad;
        $estadofactibilidades->nombre = $request->input('nombre');
        $estadofactibilidades->estado = '1';
        $estadofactibilidades->save();
        return redirect('estadofactibilidad')->with('info', 'Datos ingresados correctamente');
    }

   
    public function show($id)
    {
        
    }

    
    public function edit(Estadofactibilidad $estadofactibilidad,Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        return view('estadofactibilidad.edit',compact('estadofactibilidad'));
    }

    
    public function update(Request $request, Estadofactibilidad $estadofactibilidad)
    {
        $request->user()->autorizeRoles(['admin']);
        $request->validate([
            'nombre' => 'required'
        ]);
  
        $estadofactibilidad->update($request->all());
        return redirect('estadofactibilidad')->with('info','Datos actualizados correctamente');
    }


    public function desactivar(Estadofactibilidad $estadofactibilidad, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        $estadofactibilidad->estado='0';
        $estadofactibilidad->save();
        return redirect(route('estadofactibilidad.index'))->with('info', 'Estado de factibilidad desactivado correctamente');
    }

    public function activar(Estadofactibilidad $estadofactibilidad, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        $estadofactibilidad->estado='1';
        $estadofactibilidad->save();
        return redirect(route('estadofactibilidad.index'))->with('info', 'Estado de factibilidad activado correctamente');
    }

}
