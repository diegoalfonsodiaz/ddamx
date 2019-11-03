@extends('admin.principal')
@section('header')
<h1>
Cargos de ejecutor
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Mantenimiento</li>
        <li class="active">Cargos de ejecutor</li>
        
      </ol>
      
@stop
@section('contenido')
<div class="box-header">
    @if(session()->has('info'))
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
            <div class="box-header with-border">
              <h3 class="box-title"> Listado de cargos de ejecutor</h3>
              <div class="pull-right">
                <a  href="{{ route('cargoejecutor.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear cargo de ejecutor</a>
                
            </div>
              <br><br><br>
              
            <!-- /.box-header -->
            <!-- form start -->
        <table   id="persona-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
            <th># </th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        </thead>
        @foreach ($cargoejecutor as $product)
        <tbody>
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->nombre }}</td>
            @if($product->estado==1)
                                <td ><p style="color:green;">Activo</p></td>
                              
                                @else
                                <td ><p style="color:red;">Inactivo</p></td>
                                @endif
                              
                                
                                <td>
                                    <a href="{{route('cargoejecutor.edit', $product->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                    
                                   
                                    @if($product->estado==1)
                                    <form method="POST" 
                                    action="{{route('cargoejecutor.desactivar', $product->id)}}"
                                    style="display:inline">
                                    {{csrf_field()}} {{ method_field('POST')}}
                                    <button class="btn btn-xs btn-danger" ><i class="fa fa-remove"></i></button>
                                    </form>
                              
                                @else
                                <form method="POST" 
                                    action="{{route('cargoejecutor.activar', $product->id)}}"
                                    style="display:inline">
                                    {{csrf_field()}} {{ method_field('DELETE')}}
                                    <button class="btn btn-xs btn-success" ><i class="fa fa-check"></i></button>
                                    </form>
                              
                                @endif
            
        </tr>
        </tbody>
        @endforeach
    </table>
            
            
</div>
@stop