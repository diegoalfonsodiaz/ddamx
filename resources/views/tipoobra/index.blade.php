@extends('admin.principal')
@section('contenido')
    <h1>Listado Tipo de obra</h1>
    <a class="btn btn-primary" href="{{ route('tipoobra.create') }}" type="button">Nuevo</a>
    
    @if(session('info'))
    <div class="alert alert-success" role="alert">
        {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" alert-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <table class="table table-bordered table-hover ">
    <thead>
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        
    @if(count($tipoobra)>0)
      @foreach($tipoobra->all() as $ef)
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
            <a class="btn btn-info" href="#" type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-eye-open" ></span>
            </a>

            <a class="btn btn-warning" href='{{ route('tipoobra.edit',$ef->id) }}' class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            @if($ef->estado == 1)
            <a class="btn btn-danger" href='{{ url("/desactivar/{$ef->id}") }}' type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
            @endif
            @if($ef->estado == 0)
            <a class="btn btn-primary" href='{{ url("/activar/{$ef->id}") }}' type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-ok-circle"></span>
            </a>
            @endif

          </td>
          
        </tr>
      @endforeach
    @endif

    </tbody>
    </table>

   
@stop