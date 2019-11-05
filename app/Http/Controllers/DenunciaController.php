<?php

namespace App\Http\Controllers;

use App\Denuncia;
use Illuminate\Http\Request;
use App\Estadodenuncia;
use DB;

class DenunciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->autorizeRoles(['secretaria','operaciones','jefeoperaciones','admin']);

        $denuncia= DB::table('denuncias as d')
        ->join('estadodenuncias as e', 'd.estadodenuncia_id','=', 'e.id')
        ->select('d.id', 'd.descripcion', 'd.fecha',
         'd.foto', 'e.descripcion as estado', 'e.estado as es',
         'd.direccion', 'd.telefono','d.estadodenuncia_id as estadodenuncia')
         ->orderBy('d.id','desc')
        ->get();
        return view('denuncia.index', ["denuncia"=>$denuncia])->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['secretaria','operaciones','jefeoperaciones','admin']);

        $estado=Estadodenuncia::all();
        return view("denuncia.create",compact('estado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->autorizeRoles(['secretaria','operaciones','jefeoperaciones','admin']);

        $validate = $request->validate([
            'descripcion'=>'required',
            'foto' =>'required|mimes:jpg,jpeg,bmp,png',
            'telefono' => 'required',
        ]);

		if ($request->hasFile('foto')) {
			# code...
			$file = $request->file('foto');
			$name = time().$file->getClientOriginalName();
			$file->move(public_path().'/images', $name);
		}
        
        $denuncia = new Denuncia;
        $denuncia->descripcion = $request->input('descripcion');
        $denuncia->direccion = $request->input('direccion');
        $denuncia->telefono = $request->input('telefono');
        $denuncia->fecha = $request->input('fecha');
        $denuncia->foto = $name;
		$denuncia->estadodenuncia_id = '1';
		$denuncia->save();
        return redirect()->route('denuncia.index')->with('info', 'Se registro Corectamente la Denuncia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function show(Denuncia $denuncia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $request->user()->autorizeRoles(['secretaria','operaciones','jefeoperaciones','admin']);

        $estado=Estadodenuncia::where('estado','=','1')->get();
        $denuncia=Denuncia::findOrFail($id);
        return view('denuncia.edit', compact('estado'),compact('denuncia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->user()->autorizeRoles(['secretaria','operaciones','jefeoperaciones','admin']);

        /*if ($request->hasFile('foto')) {
			# code...
			$file = $request->file('foto');
			$name = time().$file->getClientOriginalName();
			$file->move(public_path().'/images', $name);
        }*/
        
        $data = array(
			//'descripcion' => $request->input('descripcion'), 
			//'fecha' => $request->input('fecha'),
			//'foto' => $name,
			'estadodenuncia_id' => $request->input('estadodenuncia_id')
		);

		Denuncia::where('id', $id)->update($data);
        return redirect()->route('denuncia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Denuncia $denuncia)
    {
        //
    }
}
