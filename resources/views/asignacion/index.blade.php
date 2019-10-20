@extends('admin.principal')

@section('header')
  <h1>Asignación de roles</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Asignación</li>
        
      </ol>
      
@stop

@section('contenido')
<div class="box-header">
    @if(session('info'))
      <div class="col-md-6">
        <div class="alert alert-success" role="alert">
            {{ session('info') }}
            <button type="button" class="close" data-dismiss="alert" alert-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      </div>
    @endif
    </div>

<div class="box box-primary">

      <div class="box-header">
        <a href="{{ route('asignacion.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear Asignación</a> 
        <h3 class="box-title">Listado de Asignaciones</h3>
      </div>
        

        <div class="box-body">
          <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Rol</th>
                    <th scope="col" width="150px">Acciones</th>
                  </tr>
              </thead>
              <tbody>
              
                @foreach($asignaciones as $asignacion)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $asignacion->usuario }}
                        <td>{{ $asignacion->correo }}</td>
                        <td>{{ $asignacion->rol }}</td>
                                                
                        
                        <td>
                            <a href="{{ route('asignacion.edit',$asignacion->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            
                            <form method="POST" 
                              action="{{route('asignaciones.destroy', $asignacion->id)}}"
                              style="display:inline">
                              {{csrf_field()}} {{ method_field('POST')}}
                              <button class="btn btn-xs btn-danger" ><i class="fa fa-remove"></i></button>
                            </form>
      
                        </td>
                    </tr>
                @endforeach

              </tbody>
          </table>
        </div>
  </div>
@stop

