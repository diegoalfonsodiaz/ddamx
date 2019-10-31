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
              <br><br>
              
              <br><br>
            <!-- /.box-header -->
            <!-- form start -->
            <table class="table table-bordered">
        <tr>
            <th># </th>
            <th>Nombre</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($cargoejecutor as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->nombre }}</td>
            <td>
                <form action="{{ route('cargoejecutor.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-xs btn-info" href="{{ route('cargoejecutor.edit',$product->id) }}"><i class="fa fa-pencil"></i></a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
            
            
</div>
@stop