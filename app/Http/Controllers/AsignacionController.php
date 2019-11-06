<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignacion;
use App\User;
use App\Role;
use DB;

class AsignacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);
        $asignaciones= DB::table('role_user as a')
        //usuario
        ->join('users as u', 'a.user_id','=', 'u.id')
        //rol
        ->join('roles as r', 'a.role_id','=', 'r.id')
        
        ->select('a.id','u.name as usuario','u.email as correo','u.estado as estado','r.nombre as rol','r.estado as estadorol')
        ->where('u.estado','=', 1)
        ->where('r.estado','=', 1)
        ->get();
        return view('asignacion.index', ["asignaciones"=>$asignaciones])->with('i');

    }

 
    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);

        $usuario=User::where('estado','=','1')->get();
        $rol=Role::all();
        return view('asignacion.create',compact('usuario','rol'));
    }

   
    public function store(Request $request)
    {
        $request->user()->autorizeRoles(['admin']);

        $this->validate($request,
            [
                'user_id'=>'required',
                'role_id'=>'required'
            ]        
        );
        Asignacion::create($request->all());
        return redirect()->route('asignacion.index')->with('info', 'Se registro Corectamente la Asignación');
    }


   
    public function edit($id,Request $request)
    {
        $request->user()->autorizeRoles(['admin']);

        $asignacion=Asignacion::findOrFail($id);
        $usuario=User::where('estado','=','1')->get();
        $rol=Role::all();
        return view('asignacion.edit', compact('asignacion','usuario','rol'));
    }

  
    public function update(Request $request, $id)
    {
        $request->user()->autorizeRoles(['admin']);

        Asignacion::findOrFail($id)->update($request->all());
        return redirect()->route('asignacion.index');
    }

  
    public function destroy(Asignacion $asignacion, Request $request, $id)
    {
        $request->user()->autorizeRoles(['admin']);

        Asignacion::find($id)->delete();
        return redirect(route('asignacion.index'))->with('info', 'Se eliminó correctamente la Asignación');
    }
}
