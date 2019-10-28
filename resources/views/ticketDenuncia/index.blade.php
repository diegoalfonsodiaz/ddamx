@extends('admin.principal')
@section('header')
  <h1>
    Tickets Denuncias
    <small>Seguimiento de casos en Denuncias</small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Tickets</li>
  </ol>
      
@stop
@section('contenido')

  <div class="box box-primary">
    <div class="box-body">
     
        <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                  <th># </th>
                  <th>Ticket ID</th>
                  <th>Descripción</th>
                  <th>Usuario</th>
                  <th width="280px">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($ticket as $tickets)
        <tr>
            <td>{{ ++$i }}</td>
            <td>Ticket:  #  {{ $tickets->denuncia }} Asunto: {{ $tickets->descripcion }} </td>
            <td>{{ $tickets->detalle }}</td>
            <td>{{ $tickets->user }}</td>
            <td>
            </td>
        </tr>
        @endforeach
            </tbody>
        </table>
    </div>
  </div>
@stop