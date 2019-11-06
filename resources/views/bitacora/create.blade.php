@extends('admin.principal')

@section('header')
<h1>
        Crear bitácora
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">bitácora</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary" >
            <div class="box-header with-border">
           
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('bitacora.store') }}" method="POST">
            {!! csrf_field() !!}
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <!-- personas -->
                        <div class="form-group">
                            <label for="select" class="">Número de licencia</label>
                            <select name="licencia_id" class="form-control" id="solicitud">
                                <option value="0" disabled selected>=== Selecciona el número de la licencia ===</option>
                                @foreach($licencia as $carac)
                                <option value="{{$carac->id}}">{{$carac->numerolicencia}}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" name="fecha" class="form-control" >
                        </div>

                        <div class="form-group">
                            <strong>Descripción</strong>
                            <input type="text" autocomplete="off" name="descripcion" class="form-control" placeholder="Descripción">
                        </div>
                        <div class="form-group">
                            <strong>Dirección</strong>
                            <input type="text" autocomplete="off" name="direccion" class="form-control" placeholder="Dirección">
                        </div>

                        <div class="form-group">
                            <strong>Asunto</strong>
                            <select name="asunto_id" id="asunto_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione el asunto ===</option>
                                    @foreach($asunto as $c)
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script >
$('#solicitud').select2({
  theme: "classic"
});
</script>


@stop