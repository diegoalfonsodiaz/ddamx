@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Asunto de denuncia</h3>
              <br><br>
              <div class="pull-left">
                <a class="btn btn-success" href="{{ route('cargoejecutor.create') }}"> Crear </a>
            </div>
              <br><br>
            <!-- /.box-header -->
            <!-- form start -->
            <table class="table table-bordered">
        <tr>
            <th># </th>
            <th>Nombre</th>
            <th>Descripcion Asunto</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($asunto as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->nombre }}</td>
            <td>{{ $product->descripcion }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Mostrar</a>
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>
                <a class="btn btn-primary" href="{{ route('products.destroy',$product->id) }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
            
            
</div>
@stop