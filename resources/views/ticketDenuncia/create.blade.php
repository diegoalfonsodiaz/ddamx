@extends('admin.principal')
@section('contenido')
<div class="box box-primary" >
            <div class="box-header with-border">
              <h1 class="box-title">Crear Suceso Denuncias </h1>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('ticketdenuncia.store') }}" method="POST">
            {!! csrf_field() !!}
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <!-- personas -->
                        <div class="form-group">
                            <label for="select" class="">Denuncia</label>
                            <select name="denuncia_id" class="form-control" id="solicitud">
                                <option value="0" disabled selected>=== Selecciona la denuncia ===</option>
                                @foreach($denuncia as $den)
                                <option value="{{$den->id}}"># {{$den->id}} Asunto: {{$den->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <strong>Detalle</strong>
                            <input type="text" name="detalle" class="form-control" placeholder="Detalle">
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