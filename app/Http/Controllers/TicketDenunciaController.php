<?php

namespace App\Http\Controllers;

use App\ticketDenuncia;
use App\Denuncia;
use Illuminate\Http\Request;
use DB;

class TicketDenunciaController extends Controller
{

    public function index($id)
    {
        $ticket= DB::table('ticket_denuncias as td')
        //denuncias
        ->leftjoin('denuncias as d', 'td.denuncia_id','=', 'd.id')
        //
        ->select('td.id','d.id as denuncia','td.fecha','td.user','td.detalle','d.descripcion')
        ->where('td.denuncia_id','=', $id)
        ->get();
        return view('ticketDenuncia.index', ["ticket"=>$ticket])->with('i');
    }

 
    public function create()
    {
        $denuncia=Denuncia::all();
        return view('ticketDenuncia.create',compact('denuncia'));
    }

 
    public function store(Request $request)
    {        
        $ticket = new ticketDenuncia;
        $ticket->denuncia_id = $request->input('denuncia_id');
        $ticket->detalle = $request->input('detalle');
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
