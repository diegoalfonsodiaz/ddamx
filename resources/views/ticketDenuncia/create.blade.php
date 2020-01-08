@extends('admin.principal')
@section('header')
<h1>
       Crear seguimiento de denuncias
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Seguimiento de denuncias</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary" >

<div class="box-header">
        @if($errors->any())
        <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
                Ingrese  imágenes  con  formato  JPG,  JPEG,  BMP,  PNG.
                <button type="button" class="close" data-dismiss="alert" alert-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
    </div>

            <div class="box-header with-border">
          
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('ticketdenuncia.store') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <!-- personas -->
                        <div class="form-group">
                            <label for="select" class="">Denuncia</label>
                            <select name="denuncia_id" class="form-control" id="solicitud">
                                <option value="0" disabled selected>=== Selecciona la denuncia ===</option>
                                @foreach($denuncia as $den)
                                <option value="{{$den->id}}">Denuncia # {{$den->id}}, Descripción de la denuncia: {{$den->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <strong>Detalle</strong>
                            <input type="text" autocomplete="off" name="detalle" class="form-control" placeholder="Detalle">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Imagen de solución</label>
                            <input name="fotografia" type="file" class="form-control" id="exampleInputPassword1" placeholder="Seleccione una imagen">
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