<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use Illuminate\Session\SessionManager;

class ContactoExternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.contacto');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request, SessionManager $sessionManager)
    {
        $this->validate($request,
        [
            'nombre'=>'required',
            'email'=>'required',
            'descripcion'=>'required',
            recaptchaFieldName() => recaptchaRuleName()
        ]
    );
    $contacto = new Contacto();
    $contacto->nombre = $request->input('nombre');
    $contacto->email = $request->input('email');
    $contacto->descripcion = $request->input('descripcion');
    $contacto->save();

    $sessionManager->flash('mensajetipo', '¡Gracias por comunicarte con nosotros!');
    $sessionManager->flash('mensaje', 'Pronto estareamos en contacto con usted.');

    
    return view('front.respuesta');
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
