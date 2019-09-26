@extends('admin.principal')
@section('contenido')

    <h1>Listado Estado Licencia</h1>
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
        <th scope="col">Descripcion</th>
        <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
    
    @if(count($estadolicencias)>0)
      @foreach($estadolicencias->all() as $el)
        <tr>
          
          <td>{{ $el->nombre }}</td>
          <td>{{ $el->descripcion }}</td>
         
        

          
        </tr>
      @endforeach
    @endif

        </tbody>
        </table>



@stop