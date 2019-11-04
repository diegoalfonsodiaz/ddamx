<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        $roles = Role::all();
        return view('rol.index',compact('roles'))->with('i');
    }

    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        return view('rol.create');
    }

    public function store(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
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

    public function edit(Role $rol, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        return view('rol.edit',compact('rol'));
    }


    public function update(Request $request, Role $rol)
    {
        $request->user()->autorizeRoles(['admin']);
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
        $request->user()->autorizeRoles(['admin']);
        $rol->estado='0';
        $rol->save();
        return redirect(route('rol.index'))->with('info', 'Estado desactivado correctamente');
    }

    public function activar(Role $rol, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        $rol->estado='1';
        $rol->save();
        return redirect(route('rol.index'))->with('info', 'Estado activado correctamente');
    }
}
