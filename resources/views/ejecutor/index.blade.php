@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Cargo ejecutor</h3>
              <br><br>
              <div class="pull-left">
                <a class="btn btn-success" href="{{ route('ejecutor.create') }}"> Crear </a>
            </div>
              <br><br>
            <!-- /.box-header -->
            <!-- form start -->
            <table class="table table-bordered">
        <tr>
            <th># </th>
            <th>Nombre</th>
            <th>direccion</th>
            <th>ornato</th>
            <th>cargo</th>
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
                    <a class="btn btn-primary" href="{{ route('ejecutor.edit',$ejecutors->id) }}">Editar</a>
   
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