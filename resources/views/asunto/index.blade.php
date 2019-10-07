@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Asunto de denuncia</h3>
              <div class="pull-right">
                <a class="btn btn-success" href="{{ route('asunto.create') }}"> Crear Asunto de Bitacora </a>
                <br><br>
              
            </div>
              <br><br>
            <!-- /.box-header -->
            <!-- form start -->
            <table class="table table-bordered">
                <tr>
                    <th># </th>
                    <th>Nombre</th>
                    <th>Descripcion de Asunto</th>
                    <th width="280px">Acciones</th>
                </tr>
                @foreach ($asunto as $asuntos)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $asuntos->nombre }}</td>
                    <td>{{ $asuntos->descripcion }}</td>
                    <td>
                    
                        <form action="{{ route('asunto.destroy',$asuntos->id) }}" method="POST">
                            <a class="btn btn btn-info" href="{{ route('asunto.edit',$asuntos->id) }}"><i class="fa fa-pencil"></i></a>
        
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn btn-danger"><i class="fa fa-remove"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            
            
</div>
@stop