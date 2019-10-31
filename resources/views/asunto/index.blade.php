@extends('admin.principal')

@section('header')
  <h1>Asuntos de bitácora</h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Mantenimiento</li>
        <li class="active">Asuntos de bitácora</li>
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
                <a href="{{ route('asunto.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear asunto de Bitacora</a>
                <h3 class="box-title">Listado asuntos de bitácora</h3>
                </div>

                <div class="box-body">
      <table id="" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th scope="col" width="250px">#</th>
            <th scope="col" width="250px">Nombre</th>
            <th scope="col" width="450px">Descripción</th>
            <th scope="col" width="200px">Acciones</th>
            </tr>
        </thead>
              
            </div>
            <tbody>

                @foreach ($asunto as $asuntos)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $asuntos->nombre }}</td>
                    <td>{{ $asuntos->descripcion }}</td>
                    <td>
                    
                        <form action="{{ route('asunto.destroy',$asuntos->id) }}" method="POST">
                            <a class="btn btn-xs btn-info" href="{{ route('asunto.edit',$asuntos->id) }}"><i class="fa fa-pencil"></i></a>
        
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            
            
</div>
@stop