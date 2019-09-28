@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
  <div class="box-header with-border">
    <h2> Estado de Factibilidad</h2>
    <br>
    <div class="pull-left">
    <a class="btn btn-primary" href="{{ url('/agregarfacti') }}" type="button">Nuevo</a>

    @if(session('info'))
      <div class="alert alert-success" role="alert">
          {{ session('info') }}
          <button type="button" class="close" data-dismiss="alert" alert-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
    @endif

    </div>
  <br><br>
  <!-- /.box-header -->
  <!-- form start -->
  <table class="table table-bordered">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
      <th scope="col" width="280px">Acciones</th>
    </tr>
    @if(count($estadofactibilidads)>0)
      @foreach($estadofactibilidads->all() as $ef)
        <tr>
          
          <td>{{ $ef->nombre }}</td>
          <td> 
          @if($ef->estado == 1)
            <!--<a class="badge badge-danger">Activado</a>-->
            <a class="label label-success">Activo</a>
          @endif
          @if($ef->estado == 0)
            <!--<a href="#" class="badge badge-danger">Desactivado</a>-->
            <a class="label label-danger">Desactivado</a>
          @endif
          </td>

          <td>
            <a class="btn btn-info" href='{{ url("/detallefacti/{$ef->id}") }}' type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-eye-open" ></span>
            </a>

            <a class="btn btn-warning" href='{{ url("/actualizarfacti/{$ef->id}") }}' class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            @if($ef->estado == 1)
            <a class="btn btn-danger" href='{{ url("/desactivarfacti/{$ef->id}") }}' type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
            @endif
            @if($ef->estado == 0)
            <a class="btn btn-primary" href='{{ url("/activarfacti/{$ef->id}") }}' type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-ok-circle"></span>
            </a>
            @endif

          </td>
          
        </tr>
      @endforeach
    @endif
    </table>
            
            
</div>
@stop

