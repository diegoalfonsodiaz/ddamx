@extends('admin.principal')
@section('header')
  <h1>
    Seguimiento de casos
  </h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Tickets</li>
  </ol>
      
@stop
@section('contenido')

  <div class="box box-primary">
    <div class="box-header">        
       
     
    </div>
            <!-- /.box-header -->
    <div class="box-body">
     
        <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                  <th># </th>
                  <th>Ticket ID</th>
                  <th>Descripción</th>
                  <th>Encargado</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($ticket as $tickets)
        <tr>
            <td>{{ ++$i }}</td>
            <td>Ticket:  #  {{ $tickets->bitacora }} Asunto: {{ $tickets->descripcion }} </td>
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