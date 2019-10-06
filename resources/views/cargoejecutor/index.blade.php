@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Cargo ejecutor</h3>
              <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cargoejecutor.create') }}"> Crear Nuevo Cargo Ejecutor </a>
                
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