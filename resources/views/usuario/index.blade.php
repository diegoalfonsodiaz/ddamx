@extends('admin.principal')

@section('header')
  <h1>Usuarios</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Usuario</li>
        
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
        <a href="{{ route('usuario.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear Usuario</a> 
        <h3 class="box-title">Listado de Usuarios</h3>
      </div>
        

        <div class="box-body">
          <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                    <th scope="col" width="30px">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col" width="200px">Estado</th>
                    <th scope="col" width="150px">Acciones</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($usuarios as $usuario)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                      
                      @if($usuario->estado == 1)
                        <td ><p style="color:green;">Activo</p></td>
                      @else
                        <td ><p style="color:red;">Inactivo</p></td>
                      @endif
                    
                      
                      <td>
                          <a href="{{route('usuario.edit', $usuario->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                          
                          @if($usuario->estado == 1)
                            <form method="POST" 
                              action="{{route('usuarios.desactivar', $usuario)}}"
                              style="display:inline">
                              {{csrf_field()}} {{ method_field('POST')}}
                              <button class="btn btn-xs btn-danger" ><i class="fa fa-remove"></i></button>
                            </form>
                        
                          @else
                            <form method="POST" 
                              action="{{route('usuarios.activar', $usuario)}}"
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

