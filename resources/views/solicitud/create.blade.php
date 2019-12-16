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
        
                <div class="box-body">
                        <!-- personas -->
                            <div class="form-group {{ $errors->has('persona_id') ? 'has-error': ''}}">
                                <label for="select" class="">Nombre del propietario</label><label style="color:red;">*</label>
                                <select name="persona_id" class="form-control" id="persona" >
                                    <option value="0" disabled selected >=== Seleccione nombre del propietario ===</option>
                                    @foreach($persona as $carac)
                                    <option value="{{$carac->id}}">{{$carac->dpi}},  {{$carac->nombre}}  {{$carac->apellido}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('persona_id',' <span class="help-block">Seleccione un propietario</span>')!!}

                            </div>

                        <div class="form-group">
                            <strong>Dirección</strong>
                            <input type="text" autocomplete="off" name="direccion" class="form-control" value="{{ old('direccion')}}" placeholder="Dirección">
                        </div>

                        <div class="form-group {{ $errors->has('direccionobra') ? 'has-error': ''}}">
                            <strong>Dirección de la obra</strong><label style="color:red;">*</label>
                            <input type="text" autocomplete="off" name="direccionobra" class="form-control" value="{{ old('direccionobra')}}" placeholder="Dirección de la obra" >
                            {!! $errors->first('direccionobra',' <span class="help-block">Campo obligatorio</span>')!!}

                        </div>

                        <div class="form-group">
                            <strong>Inmueble</strong>
                            <input type="text" autocomplete="off" name="codigoinmueble" class="form-control" value="{{ old('codigoinmueble')}}" placeholder="Inmueble">
                        </div>

                        <div class="form-group">
                            <strong>Número de expediente</strong>
                            <input type="text" autocomplete="off" name="expediente" class="form-control" value="{{ old('expediente')}}" placeholder="Número de expediente">
                        </div>

                        <div class="form-group">
                            <strong>Expediente interno</strong>
                            <input type="text" autocomplete="off" name="expedienteinterno" class="form-control" value="{{ old('expedienteinterno')}}" placeholder="Expediente interno">
                        </div>

                        <div class="form-group {{ $errors->has('fechasolicitud') ? 'has-error': ''}}" >
                            <label for="direccion_fab">Fecha</label><label style="color:red;">*</label>
                            <input type="date" autocomplete="off" name="fechasolicitud" value="{{ old('fechasolicitud')}}" class="form-control"  >
                            {!! $errors->first('fechasolicitud',' <span class="help-block">Campo obligatorio</span>')!!}

                        </div>

                        <div class="form-group">
                            <strong>Número de finca</strong>
                            <input type="text" autocomplete="off" name="numerofinca" class="form-control" value="{{ old('numerofinca')}}" placeholder="Número de finca">
                        </div>

                        <div class="form-group">
                            <strong>Número de folio</strong>
                            <input type="text" autocomplete="off" name="numerofolio" class="form-control" value="{{ old('numerofolio')}}" placeholder="Número de folio">
                        </div>

                        <div class="form-group">
                            <strong>Libro</strong>
                            <input type="text" autocomplete="off" name="libro" class="form-control" value="{{ old('libro')}}" placeholder="Libro">
                        </div>

                        

                        <div class="form-group">
                            <strong>Solvencia municipal</strong>
                            <input type="text" autocomplete="off" name="solvenciamunicipal" class="form-control" value="{{ old('solvenciamunicipal')}}" placeholder="Solvencia municipal">
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
                            <textarea type="text" autocomplete="off" name="observacion" class="form-control" rows="3"  placeholder="Observación">{{ old('observacion')}}</textarea>
                        </div>

                        <div class="form-group">
                            <strong>Longitud</strong>
                            <input type="text" autocomplete="off" name="longitud" class="form-control" value="{{ old('longitud')}}" placeholder="Longitud">
                        </div>

                        <div class="form-group">
                            <strong>Ancho</strong>
                            <input type="text" autocomplete="off" name="ancho" class="form-control" value="{{ old('ancho')}}" placeholder="Ancho">
                        </div>

                        <div class="form-group">
                            <strong>Profundidad</strong>
                            <input type="text" autocomplete="off" name="profundidad" class="form-control" value="{{ old('profundidad')}}" placeholder="Profundidad Metros aprox.">
                        </div>

                        <div class="form-group">
                            <strong>Diámetro de tubo</strong>
                            <input type="text" autocomplete="off" name="diametrotubo" class="form-control" value="{{ old('diametrotubo')}}" placeholder="Diámetro de tubo">
                        </div>

                        <div class="form-group">
                            <strong>Diámetro de colector</strong>
                            <input type="text" autocomplete="off" name="diametrocolector" class="form-control" value="{{ old('diametrocolector')}}" placeholder="Diámetro de colector">
                        </div>

                      

                        <div class="form-group">
                                <label for="select" class="">Nombre del ejecutor</label>
                                <select name="ejecutor_id" class="form-control" id="ejecutor" >}
                                    <option value="0" disabled selected >=== Seleccione nombre del ejecutor ===</option>
                                    @foreach($ejecutor as $ejecutores)
                                    <option value="{{$ejecutores->id}}">{{$ejecutores->nombre}}</option>
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

<script >
$('#ejecutor').select2({
  theme: "classic"
});
</script>


@stop