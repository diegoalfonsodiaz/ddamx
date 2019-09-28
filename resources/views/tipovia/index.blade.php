@extends('admin.principal')
@section('contenido')

    <h1>Listado Tipo Vías</h1>
    <a class="btn btn-primary" href="{{ url('/agregartipovia') }}" type="button">Nuevo</a>
    @if(session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
    @endif
    <table class="table table-bordered table-hover ">
    <thead>
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>

    @if(count($tipovias)>0)
      @foreach($tipovias->all() as $tpv)
        <tr>

          <td>{{ $tpv->nombre }}</td>
          <td>{{ $tpv->descripcion }}</td>
          <td> 
          @if($tpv->estado == 1)
          <a href="#" class="badge badge-primary">Activado</a>
          @endif
          @if($tpv->estado == 0)
          <a href="#" class="badge badge-danger">Desactivado</a>
          @endif
          <td>
            <a class="badge badge-warning" href='{{ url("/actualizartipovia/{$tpv->id}") }}'> Editar </a> 
            <a class="badge badge-warning" href='{{ url("/eliminartipovia/{$tpv->id}") }}'> Eliminar </a> 
          </td>
      @endforeach
    @endif

    </tbody>
    </table>


@stop 