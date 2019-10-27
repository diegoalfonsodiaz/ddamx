@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Cargo Ejecutor</h3>
              <div class="pull-right">
                <a href="{{ route('ejecutor.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear  Ejecutor</a>
              <br><br>
              
            </div>
              <br><br>
            <!-- /.box-header -->
            <!-- form start -->
            <table class="table table-bordered">
        <tr>
            <th># </th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Ornato</th>
            <th>Cargo</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($ejecutor as $ejecutors)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ejecutors->nombre }}</td>
            <td>{{ $ejecutors->direccion }}</td>
            <td>{{ $ejecutors->ornato }}</td>
            <td>{{ $ejecutors->cargo }}</td>
            <td>
                <form action="{{ route('ejecutor.destroy',$ejecutors->id) }}" method="POST">
                    <a class="btn btn-xs btn-info" href="{{ route('ejecutor.edit',$ejecutors->id) }}"><i class="fa fa-pencil"></i></a>
   
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