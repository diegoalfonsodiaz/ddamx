@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Tipi vía</h3>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('insertartipovia',$asunto->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <input type="text" name="nombre" value="{{ $asunto->nombre }}" class="form-control" placeholder="Nombre">

                            <strong>Descripcion:</strong>
                            <input type="text" name="descripcion" value="{{ $asunto->descripcion }}" class="form-control" placeholder="Descripcion">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
            </div>
</div>
@stop