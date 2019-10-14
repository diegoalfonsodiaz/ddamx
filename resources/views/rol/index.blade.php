@extends('admin.principal')

@section('header')
  <h1>Roles</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Rol</li>
        
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
        
        <h3 class="box-title">Listado de Roles</h3>
      </div>
        

        <div class="box-body">
          <table class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                    <th scope="col" width="30px">#</th>
                    <th scope="col">Nombre Rol</th>
                    <th scope="col">Descripción Rol</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($roles as $rol)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $rol->nombre }}</td>
                        <td>{{ $rol->descripcion }}</td>
                        
                    </tr>
                @endforeach
              </tbody>
          </table>
        </div>
  </div>
@stop

