@extends('admin.principal')
@section('contenido')
<div class="box box-primary" >
            <div class="box-header with-border">
              <h1 class="box-title">Crear Suceso Bitacora </h1>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('ticket.store') }}" method="POST">
            {!! csrf_field() !!}
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <!-- personas -->
                        <div class="form-group">
                            <label for="select" class="">Numero de Licencia</label>
                            <select name="bitacora_id" class="form-control" id="solicitud">
                                <option value="0" disabled selected>=== Selecciona el numero de bitacora ===</option>
                                @foreach($bitacora as $carac)
                                <option value="{{$carac->id}}"># {{$carac->id}} Asunto: {{$carac->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">

                        

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