@extends('admin.principal')
@section('header')
<h1>
        Bitacora
        <small>Listado de sucesos en licencias </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Bitacora</li>
        
      </ol>
      
@stop
@section('contenido')
<div class="box box-primary">
            <div class="box-header">
            
            <a href="{{route('bitacora.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear Suceso</a> 
              <h3 class="box-title">Bitacora</h3>
            </div>
            <div class="box-body">
                <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                                <th>#</th>
                                <th>Fecha</th>
                                <th>Usuario</th>
                                <th>Licencia</th>
                                <th>Descripción</th>
                                <th>Asunto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bitacora as $bitacoras)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{$bitacoras->fecha}}</td>
                                <td>{{$bitacoras->user}}</td>
                                <td>{{$bitacoras->nlicencia}}</td>
                                <td>{{$bitacoras->descripcion}}</td>
                                <td>{{$bitacoras->asunto}}</td>
                                <td>
                                <form action="{{ route('bitacora.destroy',$bitacoras->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('bitacora.edit', $bitacoras->id) }}">Editar</a>
                
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