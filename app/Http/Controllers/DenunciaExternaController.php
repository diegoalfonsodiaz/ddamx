<?php

namespace App\Http\Controllers;

use App\Denuncia;
use Illuminate\Http\Request;
use App\Estadodenuncia;
use DB;

class DenunciaExternaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.denunciaexterna');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->Validate($request,
			[
                'descripcion'=>'required',
                recaptchaFieldName() => recaptchaRuleName()
			]
		);

		if ($request->hasFile('foto')) {
			# code...
			$file = $request->file('foto');
			$name = time().$file->getClientOriginalName();
			$file->move(public_path().'/images', $name);
		}
        
        $denuncia = new Denuncia;
		$denuncia->descripcion = $request->input('descripcion');
        $denuncia->fecha = $request->input('fecha');
        $denuncia->foto = $name;
		$denuncia->estadodenuncia_id = '1';
		$denuncia->save();
        return redirect()->route('denunciaexterna.index')->with('info', 'Se registro Corectamente la Denuncia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
