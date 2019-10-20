@extends('admin.principal')

@section('header')
  <h1>Tipo Vía</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Tipo vía</li>
        <br>
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
        <a href="{{ url('/agregartipovia') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear Estado</a> 
        <h3 class="box-title">Listado de Tipos de Vía</h3>
      </div>


    <div class="box-body">
      <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th scope="col" width="250px">Nombre</th>
            <th scope="col" width="450px">Descripcion</th>
            <th scope="col" width="200px">Estado</th>
            <th scope="col" width="200px">Acciones</th>
            </tr>
        </thead>
      
        <tbody>

          
            @foreach($tipovias as $tipovia)
              <tr>

                <td>{{ $tipovia->nombre }}</td>
                <td>{{ $tipovia->descripcion }}</td>

                @if($tipovia->estado == 1)
                  <td ><p style="color:green;">Activo</p></td>
                @else
                  <td ><p style="color:red;">Inactivo</p></td>
                @endif

                <td>

                    <a href='{{ url("/actualizartipovia/{$tipovia->id}") }}' class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                

                    @if($tipovia->estado == 1)
                      <form method="POST" 
                        action="{{route('tipovias.desactivar', $tipovia)}}"
                        style="display:inline">
                        {{csrf_field()}} {{ method_field('POST')}}
                        <button class="btn btn-xs btn-danger" ><i class="fa fa-remove"></i></button>
                      </form>
                  
                    @else
                      <form method="POST" 
                        action="{{route('tipovias.activar', $tipovia)}}"
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