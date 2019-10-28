<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        //$request->user()->autorizeRoles('admin');
        $request->user()->autorizeRoles(['admin']);
        $usuarios = User::all();
        return view('usuario.index',compact('usuarios'))->with('i');
    }

  
    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        //$request->user()->autorizeRoles('operaciones');
        return view('usuario.create');
    }

  
    public function store(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
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


    public function edit(User $usuario,Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        return view('usuario.edit',compact('usuario'));
    }


    public function update(Request $request, User $usuario)
    {
        $request->user()->autorizeRoles(['admin']);
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
        $request->user()->autorizeRoles(['admin']);
        $usuario->estado='0';
        $usuario->save();
        return redirect(route('usuario.index'))->with('info', 'Estado desactivado correctamente');
    }

    public function activar(User $usuario, Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        $usuario->estado='1';
        $usuario->save();
        return redirect(route('usuario.index'))->with('info', 'Estado activado correctamente');
    }

}
