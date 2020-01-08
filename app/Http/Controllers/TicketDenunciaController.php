<?php

namespace App\Http\Controllers;

use App\ticketDenuncia;
use App\Denuncia;
use Illuminate\Http\Request;
use DB;

class TicketDenunciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id,Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $ticket= DB::table('ticket_denuncias as td')
        //denuncias
        ->leftjoin('denuncias as d', 'td.denuncia_id','=', 'd.id')
        //
        ->select('td.id','d.id as denuncia','td.fecha','td.user','td.detalle','d.descripcion','td.updated_at as fechamodificacion','td.fotografia')
        ->where('td.denuncia_id','=', $id)
        ->get();
        return view('ticketDenuncia.index', ["ticket"=>$ticket])->with('i');
    }

 
    public function create(Request $request)
    {
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $denuncia=Denuncia::whereIn('estadodenuncia_id',[1, 2])->get();
        return view('ticketDenuncia.create',compact('denuncia'));
    }

 
    public function store(Request $request)
    {        
        $request->user()->autorizeRoles(['operaciones','jefeoperaciones','admin']);

        $validate = $request->validate([
            'fotografia' =>'mimes:jpg,jpeg,bmp,png'
        ]);

        if ($request->hasFile('fotografia')) {
		 	# code...
		 	$file = $request->file('fotografia');
		 	$name = time().$file->getClientOriginalName();
		 	$file->move(public_path().'/images', $name);
        }
        else
        {
            $name = 'Sin fotografía';
        }
        
        
        $ticket = new ticketDenuncia;
        $ticket->denuncia_id = $request->input('denuncia_id');
        $ticket->detalle = $request->input('detalle');
        $ticket->fotografia = $name;
        $ticket->user = "ciudadano";
        $ticket->save();
        return redirect()->route('denuncia.index')->with('info', 'Se registro Corectamente');



        // ticketDenuncia::create($request->all());
        // return redirect()->route('denuncia.index');
    }


    public function show(ticketDenuncia $ticketDenuncia)
    {
        //
    }


    public function edit(ticketDenuncia $ticketDenuncia)
    {
        //
    }


    public function update(Request $request, ticketDenuncia $ticketDenuncia)
    {
        //
    }


    public function destroy(ticketDenuncia $ticketDenuncia)
    {
        //
    }
}
