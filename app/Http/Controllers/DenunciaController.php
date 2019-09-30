<?php

namespace App\Http\Controllers;

use App\Denuncia;
use Illuminate\Http\Request;
use App\Estadodenuncia;
use DB;

class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $denuncia= DB::table('denuncias as d')
        ->join('estadodenuncias as e', 'd.estadodenuncia_id','=', 'e.id')
        ->select('d.id', 'd.descripcion', 'd.fecha', 'd.foto', 'e.descripcion as estado')
        ->get();
        return view('denuncia.index', ["denuncia"=>$denuncia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $this->validate($request,
			[
				'descripcion'=>'required',
				'foto'=>'required'
			]
		);

		if ($request->hasFile('foto')) {
			# code...
			$file = $request->file('foto');
			$name = time().$file->getClientOriginalName();
			$file->move(public_path().'/images', $name);
		}
        
        
        /*$data = array(
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'foto' => $request->$name,
            'estadodenuncia_id' => $request->estadodenuncia_id,
        );*/
        
        //Denuncia::create($request->all());
        $denuncia = new Denuncia;
		$denuncia->descripcion = $request->input('descripcion');
        $denuncia->fecha = $request->input('fecha');
        $denuncia->foto = $name;
		$denuncia->estadodenuncia_id = $request->input('estadodenuncia_id');
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
    public function edit($id)
    {
        $estado=Estadodenuncia::all();
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

        if ($request->hasFile('foto')) {
			# code...
			$file = $request->file('foto');
			$name = time().$file->getClientOriginalName();
			$file->move(public_path().'/images', $name);
        }
        
        $data = array(
			'descripcion' => $request->input('descripcion'), 
			'fecha' => $request->input('fecha'),
			'foto' => $name,
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
