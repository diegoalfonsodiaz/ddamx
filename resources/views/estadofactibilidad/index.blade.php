@extends('admin.principal')

@section('header')
  <h1>Estados de factibilidad</h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Manteninimiento</li>
        <li class="active">Estados de factibilidad</li>
        
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
        <a href="{{ route('estadofactibilidad.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear estado de factibilidad</a>
        <h3 class="box-title">Listado de estados de factibilidad</h3>
      </div>
        

        <div class="box-body">
          <table id="" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Estado</th>
                    <th scope="col" width="280px">Acciones</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($estadofactibilidades as $estadofactibilidad)
                  <tr>
                    <td>{{ $estadofactibilidad->nombre }}</td>
                      
                      @if($estadofactibilidad->estado == 1)
                        <td ><p style="color:green;">Activo</p></td>
                      @else
                        <td ><p style="color:red;">Inactivo</p></td>
                      @endif
                    
                      
                      <td>
                          <a href="{{route('estadofactibilidad.edit', $estadofactibilidad->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                          
                          @if($estadofactibilidad->estado == 1)
                            <form method="POST" 
                              action="{{route('estadofactibilidades.desactivar', $estadofactibilidad)}}"
                              style="display:inline">
                              {{csrf_field()}} {{ method_field('POST')}}
                              <button class="btn btn-xs btn-danger" ><i class="fa fa-remove"></i></button>
                            </form>
                        
                          @else
                            <form method="POST" 
                              action="{{route('estadofactibilidades.activar', $estadofactibilidad)}}"
                              style="display:inline">
                              {{csrf_field()}} {{ method_field('DELETE')}}
                              <button class="btn btn-xs btn-success" ><i class="fa fa-check"></i></button>
                            </form>
                        
                          @endif
                        
                        </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
  </div>
@stop

