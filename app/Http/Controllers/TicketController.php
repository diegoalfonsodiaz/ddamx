<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use DB;
use App\Bitacora;
use App\User;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $ticket= DB::table('tickets as t')
        //persona
        ->leftjoin('users as u', 't.user_id','=', 'u.id')
        //tipoobra
        ->leftjoin('bitacoras as b', 't.bitacora_id','=', 'b.id')
        //
        ->select('t.id','b.id as bitacora','t.fecha', 'u.name as user','t.detalle','b.descripcion')
        ->where('t.bitacora_id','=', $id)
        ->get();
        return view('ticket.index', ["ticket"=>$ticket])->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=User::all();
        $bitacora=Bitacora::all();
        return view('ticket.create',compact('usuarios','bitacora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ticket::create($request->all());
        return redirect()->route('bitacora.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
