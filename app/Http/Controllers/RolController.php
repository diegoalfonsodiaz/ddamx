<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RolController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('rol.index',compact('roles'))->with('i');
    }

    public function create()
    {
        return view('rol.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'nombre'=>'required'
            ]        
        );
        $rol = new Role;
        $rol->nombre = $request->input('nombre');
        $rol->descripcion = $request->input('descripcion');
        $rol->estado = '1';
        $rol->save();
        return redirect('rol')->with('info', 'Se registro Corectamente el Rol');
    }

    public function edit(Role $rol)
    {
        return view('rol.edit',compact('rol'));
    }


    public function update(Request $request, Role $rol)
    {
        $this->validate($request,
            [
                'nombre'=>'required'
            ]
        );

        $rol->update($request->all());
        return redirect(route('rol.index'))->with('info', 'El Rol se actulizó con éxito');
    }

    public function desactivar(Role $rol, Request $request)
    {
        $rol->estado='0';
        $rol->save();
        return redirect(route('rol.index'))->with('info', 'Estado desactivado correctamente');
    }

    public function activar(Role $rol, Request $request)
    {
        $rol->estado='1';
        $rol->save();
        return redirect(route('rol.index'))->with('info', 'Estado activado correctamente');
    }
}
