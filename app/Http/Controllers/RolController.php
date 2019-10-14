<?php

namespace App\Http\Controllers;

use App\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{

    public function index()
    {
        $roles = Rol::all();
        return view('rol.index',compact('roles'))->with('i');
    }


}
