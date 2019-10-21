@extends('admin.principal')
@section('header')
  <h1>
    Contacto
    <small>Listado de datos de personas que solicitan mas información acerca de la pagina</small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Contacto</li>
  </ol>
      
@stop
@section('contenido')
  <div class="box box-primary">
    <div class="box-header">        
      
    </div>
            <!-- /.box-header -->
    <div class="box-body">
            
        <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                  <th width="50px"># </th>
                  <th width="400px">Nombre</th>
                  <th width="120px">Correo</th>
                  <th width="220px">Descripcion</th>
                  </tr>
            </thead>
            <tbody>
                @foreach ($contacto as $con)
                    <tr>
                      <td>{{ ++$con->id }} </td>
                      <td><h5>{{ $con->nombre }}</h5></td>
                      <td>{{ $con->email }}</td>
                      <td><h5>{{ $con->descripcion }}</h5></td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
  </div>

@stop