<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
  
    public function index()
    {
        $usuarios = User::all();
        return view('usuario.index',compact('usuarios'));
    }

  
    public function create(Request $request)
    {
        return view('usuario.create');
    }

  
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'
            ]        
        );

        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);

        $usuarios = new User;
        $usuarios->name = $request->input('name');
        $usuarios->email = $request->input('email');
        $usuarios->password = $request->input('password');
        $usuarios->estado = '1';
        $usuarios->save();
        return redirect('usuario')->with('info', 'Se registro Corectamente el Usuario');
    }

   
    public function show($id)
    {
        
    }


    public function edit(User $usuario)
    {
        return view('usuario.edit',compact('usuario'));
    }


    public function update(Request $request, User $usuario)
    {
        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'
            ]
        );

        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);

        $usuario->update($request->all());
        return redirect(route('usuario.index'))->with('info', 'El Usuario se actulizó con éxito');
    }

   
    public function desactivar(User $usuario, Request $request)
    {
        $usuario->estado='0';
        $usuario->save();
        return redirect(route('usuario.index'))->with('info', 'Estado desactivado correctamente');
    }

    public function activar(User $usuario, Request $request)
    {
        $usuario->estado='1';
        $usuario->save();
        return redirect(route('usuario.index'))->with('info', 'Estado activado correctamente');
    }

}
