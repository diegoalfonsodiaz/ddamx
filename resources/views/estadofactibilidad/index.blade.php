@extends('admin.principal')
@section('contenido')
    <h1>Listado Estado Factibilidad</h1>
    <a class="btn btn-primary" href="{{ url('/agregarForm') }}" type="button">Nuevo</a>
    @if(session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
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
        
    @if(count($estadofactibilidads)>0)
      @foreach($estadofactibilidads->all() as $ef)
        <tr>
          
          <td>{{ $ef->nombre }}</td>
          <td> 
          @if($ef->estado == 1)
          <a href="#" class="badge badge-primary">Activado</a>
          @endif
          @if($ef->estado == 0)
          <a href="#" class="badge badge-danger">Desactivado</a>
          @endif
          </td>

          <td>
            <a class="badge badge-warning" href='{{ url("/actualizar/{$ef->id}") }}'> Editar </a> 
            <a class="badge badge-warning" href='{{ url("/eliminar/{$ef->id}") }}'> Eliminar </a> 
          </td>
          
        </tr>
      @endforeach
    @endif

    </tbody>
    </table>

   
@stop