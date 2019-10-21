@extends('admin.principal')
@section('header')
  <h1>
    Tickets
    <small>Seguimiento de casos en bitacora</small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Tickets</li>
  </ol>
      
@stop
@section('contenido')
  <div class="box box-primary">
    <div class="box-header">        
      <!-- <a href="{{route('denuncia.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Nueva Denuncia</a>  -->
      <h3 class="box-title">Tickets</h3>
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
                  <th width="280px">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($ticket as $tickets)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $tickets->bitacora }}</td>
            <td>{{ $tickets->detalle }}</td>
            <td>{{ $tickets->user }}</td>
            <td>
                 <form action="{{ route('ticket.destroy',$tickets->id) }}" method="POST">
                    <a class="btn btn btn-info" href="{{ route('ticket.edit',$tickets->id) }}"><i class="fa fa-pencil"></i></a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn btn-danger"><i class="fa fa-remove"></i></button>
                </form> 
            </td>
        </tr>
        @endforeach
            </tbody>

        </table>

    </div>
  </div>

@stop















