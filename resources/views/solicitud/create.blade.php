@extends('admin.principal')
@section('header')
<h1>
        Crear solicitud
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Solicitudes de Factibilidad</li>
      </ol>
@stop
@section('contenido')

<div class="row">
            <form action="{{ route('solicitud.store') }}" method="POST">
            {!! csrf_field() !!}
    <div class="col-md-6">
        <div class="box box-primary">
        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif
                <div class="box-body">
                        <!-- personas -->
                            <div class="form-group">
                                <label for="select" class="">Nombre del propietario</label><label style="color:red;">*</label>
                                <select name="persona_id" class="form-control" id="persona" >}
                                    <option value="0" disabled selected >=== Seleccione nombre del propietario ===</option>
                                    @foreach($persona as $carac)
                                    <option value="{{$carac->id}}">{{$carac->dpi}},  {{$carac->nombre}}  {{$carac->apellido}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                            <strong>Dirección de la obra</strong><label style="color:red;">*</label>
                            <input type="text" autocomplete="off" name="direccionobra" class="form-control" placeholder="Dirección de la obra" required>
                        </div>

                        <div class="form-group">
                            <strong>Inmueble</strong>
                            <input type="text" autocomplete="off" name="codigoinmueble" class="form-control" placeholder="Inmueble">
                        </div>

                        <div class="form-group">
                            <strong>Número de expediente</strong>
                            <input type="text" autocomplete="off" name="expediente" class="form-control" placeholder="Número de expediente">
                        </div>

                        <div class="form-group">
                            <strong>Expediente interno</strong>
                            <input type="text" autocomplete="off" name="expedienteinterno" class="form-control" placeholder="Expediente interno">
                        </div>

                        <div class="form-group" style="display: none">
                            <label for="direccion_fab">Fecha</label>
                            <input type="date" autocomplete="off" name="fechasolicitud" value="<?php echo date("Y-m-d");?>" class="form-control"  >
                        </div>

                        <div class="form-group">
                            <strong>Número de finca</strong>
                            <input type="text" autocomplete="off" name="numerofinca" class="form-control" placeholder="Número de finca">
                        </div>

                        <div class="form-group">
                            <strong>Número de folio</strong>
                            <input type="text" autocomplete="off" name="numerofolio" class="form-control" placeholder="Número de folio">
                        </div>

                        <div class="form-group">
                            <strong>Libro</strong>
                            <input type="text" autocomplete="off" name="libro" class="form-control" placeholder="Libro">
                        </div>

                        <div class="form-group" style="display: none">
                            <strong>Número de catastral</strong>
                            <input type="text" autocomplete="off" name="catastral" class="form-control" placeholder="Número de catastral">
                        </div>

                        <div class="form-group">
                            <strong>Solvencia municipal</strong>
                            <input type="text" autocomplete="off" name="solvenciamunicipal" class="form-control" placeholder="Solvencia municipal">
                        </div>
                </div>
           
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
        
            <div class="box-body">
            

                        <div class="form-group">
                            <strong>Observación</strong>
                            <!--<input type="text" name="observacion" class="form-control" placeholder="Observación">-->
                            <textarea type="text" autocomplete="off" name="observacion" class="form-control" rows="3" placeholder="Observación"></textarea>
                        </div>

                        <div class="form-group">
                            <strong>Longitud</strong>
                            <input type="text" autocomplete="off" name="longitud" class="form-control" placeholder="Longitud">
                        </div>

                        <div class="form-group">
                            <strong>Ancho</strong>
                            <input type="text" autocomplete="off" name="ancho" class="form-control" placeholder="Ancho">
                        </div>

                        <div class="form-group">
                            <strong>Profundidad</strong>
                            <input type="text" autocomplete="off" name="profundidad" class="form-control" placeholder="Profundidad">
                        </div>

                        <div class="form-group">
                            <strong>Diámetro de tubo</strong>
                            <input type="text" autocomplete="off" name="diametrotubo" class="form-control" placeholder="Diámetro de tubo">
                        </div>

                        <div class="form-group">
                            <strong>Diámetro de colector</strong>
                            <input type="text" autocomplete="off" name="diametrocolector" class="form-control" placeholder="Diámetro de colector">
                        </div>

                        <div class="form-group">
                            <strong>Nombre del ejecutor</strong>
                            <select name="ejecutor_id" id="ejecutor_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione nombre del ejecutor ===</option>
                                    @foreach($ejecutor as $c)
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Estado de factibilidad</strong>
                            <select name="estadofactibilidad_id" id="estadofactibilidad_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione estado de factibilidad ===</option>
                                    @foreach($estado as $c)
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Tipo de obra </strong>
                            <select name="tipoobra_id" id="tipoobra_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione tipo de obra ===</option>
                                    @foreach($tipoobra as $c)
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                                <button class="btn btn-primary ">Guardar </button>
                                <a href="{{route('solicitud.index')}}" class="btn btn-danger pull-right"> Regresar</a> 

                         </div>

            </div>
            
        </div>
        
    </div>
   
    </form>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script >
$('#persona').select2({
  theme: "classic"
});
</script>


@stop