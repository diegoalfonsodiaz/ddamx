@extends('admin.principal')
@section('header')
  <h1>
  Seguimiento de las denuncias
 
  </h1>

  <ol class="breadcrumb">
    <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Seguimiento de denuncias</li>
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
                  <th>Fotografía de solución</th>
                  <th>Fecha de seguimiento</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($ticket as $tickets)
        <tr>
            <td>{{ ++$i }}</td>
            <td>Ticket:  #  {{ $tickets->denuncia }} Asunto: {{ $tickets->descripcion }} </td>
            <td>{{ $tickets->detalle }}</td>
            <td>
            @if($tickets->fotografia == "Sin fotografía")
            
              {{ $tickets->fotografia }}
            
            @else
              <div class="center">
                <img style="width:150px;height:100px;" src="/images/{{ $tickets->fotografia }}" class="card-img-top" alt="Sin Fotografía" />
                <a target="_blank" href="/images/{{ $tickets->fotografia }}">Abrir</a>
              </div>
            @endif
            </td>
            <td>{{ $tickets->fechamodificacion }}</td>
            <td>
            </td>
        </tr>
        @endforeach
            </tbody>
        </table>
    </div>
  </div>
@stop