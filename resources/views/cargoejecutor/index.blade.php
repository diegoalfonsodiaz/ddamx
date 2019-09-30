@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Cargo ejecutor</h3>
              <br><br>
              <div class="pull-left">
                <a class="btn btn-success" href="{{ route('cargoejecutor.create') }}"> Crear Nuevo Cargo Ejecutor </a>
            </div>
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
                    <a class="btn btn-primary" href="{{ route('cargoejecutor.edit',$product->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
            
            
</div>
@stop