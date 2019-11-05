@extends('admin.principal')
@section('header')
<h1>
        Bitácora
    
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">bitácora</li>
        
      </ol>
      
@stop
@section('contenido')
<div class="box box-primary">
            <div class="box-header">
            
        
              <h3 class="box-title">Listado de bitácoras</h3>
            </div>
            <div class="box-body">
                <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                                <th>#</th>
                                <th>Descripción</th>
                                <th>Fecha</th>
                                <th>Usuario</th>
                                <th>Licencia</th>
                                
                                <th>Asunto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bitacora as $bitacoras)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{$bitacoras->descripcion}}</td>
                                <td>{{$bitacoras->fecha}}</td>
                                <td>{{$bitacoras->user}}</td>
                                <td>{{$bitacoras->nlicencia}}</td>
                                <td>{{$bitacoras->asunto}}</td>
                                <td>
                                <form action="{{ route('bitacora.destroy',$bitacoras->id) }}" method="POST">
                                    <a  href="{{ route('bitacora.edit', $bitacoras->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-xs btn-success" href="{{ route('ticket.index', $bitacoras->id) }}"><i class="fa fa-long-arrow-right"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                </table>
            </div>
    </div>

@stop