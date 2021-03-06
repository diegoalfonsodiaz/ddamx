@extends('admin.principal')

@section('header')
  <h1>Estado de licencia</h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Mantenimiento</li>
        <li class="active">Estados de licencias</li>
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
        <a href="{{ url('/agregarForm') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear estado de licencia</a>
        <h3 class="box-title">Listado de estados licencias</h3>
      </div>


        <div class="box-body">
      <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
        <th scope="col" width="250px">Nombre</th>
        <th scope="col" width="450px">Descripción</th>
        <th scope="col" width="200px">Estado</th>
        <th scope="col" width="200px">Acciones</th>
        </tr>
    </thead>

    <tbody>
    

    @foreach($estadolicencias as $estadolicencia)
              <tr>

                <td>{{ $estadolicencia->nombre }}</td>
                <td>{{ $estadolicencia->descripcion }}</td>
               

                @if($estadolicencia->estado == 1)
                  <td ><p style="color:green;">Activo</p></td>
                @else
                  <td ><p style="color:red;">Inactivo</p></td>
                @endif
                <td>
                
                    <a href='{{ url("/actualizar/{$estadolicencia->id}") }}' class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>

                    @if($estadolicencia->estado == 1)
                      <form method="POST" 
                        action="{{route('estadolicencias.desactivar', $estadolicencia)}}"
                        style="display:inline">
                        {{csrf_field()}} {{ method_field('POST')}}
                        <button class="btn btn-xs btn-danger" ><i class="fa fa-remove"></i></button>
                      </form>
                    @else
                      <form method="POST" 
                        action="{{route('estadolicencias.activar', $estadolicencia)}}"
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


 