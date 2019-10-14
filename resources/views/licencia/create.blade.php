@extends('admin.principal')
@section('header')
<h1>
        Crear licencia
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Licencias</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary" >
            <div class="box-header with-border">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('licencia.store') }}" method="POST">
            {!! csrf_field() !!}
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <!-- personas -->
                        <div class="form-group">
                            <label for="select" class="">Licencia</label>
                            <select name="solicitudfactibilidad_id" class="form-control" id="solicitud">}
                                <option value="0" disabled selected>=== Selecciona Codigo el codigo de inmueble ===</option>
                                @foreach($solicitud as $carac)
                                <option value="{{$carac->id}}">{{$carac->codigoinmueble}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <strong>Número Licencia</strong>
                            <input type="text" name="numerolicencia" class="form-control" placeholder="Número Licencia">
                        </div>

                        <div class="form-group">
                            <label for="direccion_fab">Fecha Autorización</label>
                            <input type="date" name="fechaautorizacion" class="form-control" >
                        </div>

                        <div class="form-group">
                            <strong>Recibo</strong>
                            <input type="text" name="recibo" class="form-control" placeholder="Recibo">
                        </div>

                        <div class="">
                            <strong>Monto</strong>
                            <input type="text" name="monto" class="form-control" placeholder="Monto">
                        </div>

                        <div class="form-group">
                            <strong>Derecho</strong>
                            <input type="text" name="derecho" class="form-control" placeholder="Derecho">
                        </div>

                        <div class="form-group">
                            <strong>Remoción</strong>
                            <input type="text" name="remocion" class="form-control" placeholder="Remoción">
                        </div>

                        <div class="form-group">
                            <label for="direccion_fab">Fecha Conexión</label>
                            <input type="date" name="fechaconexion" class="form-control" >
                        </div>
                        
                        <div class="form-group">
                            <strong>Estado Licencia</strong>
                            <select name="estadolicencia_id" id="estadolicencia_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione el Estado de la Licencia ===</option>
                                    @foreach($estado as $c)
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                    @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <strong>Tipo vía </strong>
                            <select name="tipovia_id" id="tipovia_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione Tipo via ===</option>
                                    @foreach($tipovia as $c)
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