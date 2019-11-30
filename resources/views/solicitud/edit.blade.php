@extends('admin.principal')
@section('header')
<h1>
        Editar solicitud
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Solicitudes de Factibilidad</li>
      </ol>
@stop
@section('contenido')
<div class="row">
<form action="{{ route('solicitud.update', $solicitud->id) }}" method="POST">
            {!! csrf_field() !!} {{ method_field('PUT')}}
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
                            <select name="persona_id" class="form-control" id="persona" >
                                @foreach($persona as $carac)
                                @if ($carac->id==$solicitud->persona_id)
                                <option value="{{$carac->id}}">{{$carac->dpi}},  {{$carac->nombre}}  {{$carac->apellido}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
 
                        <div class="form-group">
                            <strong>Dirección</strong>
                            <input type="text" autocomplete="off" name="direccion"  value="{{ $solicitud->direccion }}" class="form-control" placeholder="Dirección">
                        </div>

                        <div class="form-group">
                            <strong>Dirección de la obra</strong><label style="color:red;">*</label>
                            <input type="text" autocomplete="off" name="direccionobra"  value="{{ $solicitud->direccionobra }}" class="form-control" placeholder="Dirección de la obra">
                        </div>

                        <div class="form-group">
                            <strong>Código del inmueble</strong>
                            <input type="text" autocomplete="off" name="codigoinmueble" value="{{ $solicitud->codigoinmueble }}"  class="form-control" placeholder="Inmueble">
                        </div>

                        <div class="form-group">
                            <strong>Número de expediente</strong>
                            <input type="text" autocomplete="off" name="expediente" value="{{ $solicitud->expediente }}"  class="form-control" placeholder="Número de expediente">
                        </div>

                        <div class="">
                            <strong>Expediente interno</strong>
                            <input type="text" autocomplete="off" name="expedienteinterno" value="{{ $solicitud->expedienteinterno }}"  class="form-control" placeholder="Expediente interno">
                        </div>

                        <div class="form-group">
                            <label for="direccion_fab">Fecha</label>
                            <input type="date" autocomplete="off" name="fechasolicitud" value="{{ $solicitud->fechasolicitud }}"  class="form-control" >
                        </div>

                        <div class="form-group">
                            <strong>Número de finca</strong>
                            <input type="text" autocomplete="off" name="numerofinca" value="{{ $solicitud->numerofinca }}"  class="form-control" placeholder="Número de finca">
                        </div>

                        <div class="form-group">
                            <strong>Número de folio</strong>
                            <input type="text" autocomplete="off" name="numerofolio" value="{{ $solicitud->numerofolio }}"  class="form-control" placeholder="Número de folio">
                        </div>

                        <div class="form-group">
                            <strong>Libro</strong>
                            <input type="text" autocomplete="off" name="libro" value="{{ $solicitud->libro }}"  class="form-control" placeholder="Libro">
                        </div>

                       
                </div>
           
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
        
            <div class="box-body">
            <div class="form-group">
                            <strong>Solvencia municipal</strong>
                            <input type="text" autocomplete="off" name="solvenciamunicipal" value="{{ $solicitud->solvenciamunicipal }}"  class="form-control" placeholder="Solvencia municipal">
                        </div>

                        <div class="form-group">
                            <strong>Observación</strong>
                            <!-- <input Type="text" autocomplete="off" name="observacion" value="{{ $solicitud->observacion }}"  class="form-control" rows="3" placeholder="Observación"> -->
                            <textarea type="text" autocomplete="off" name="observacion"  class="form-control" rows="3" placeholder="Observación">{{ $solicitud->observacion }}</textarea>
                        </div>

                        <div class="form-group">
                            <strong>Longitud</strong>
                            <input type="text" autocomplete="off" name="longitud" value="{{ $solicitud->longitud }}"  class="form-control" placeholder="Longitud">
                        </div>

                        <div class="form-group">
                            <strong>Ancho</strong>
                            <input type="text" autocomplete="off" name="ancho" value="{{ $solicitud->ancho }}"  class="form-control" placeholder="Ancho">
                        </div>

                        <div class="form-group">
                            <strong>Profundidad</strong>
                            <input type="text" autocomplete="off" name="profundidad" value="{{ $solicitud->profundidad }}"  class="form-control" placeholder="Profundidad Metros aprox.">
                        </div>

                        <div class="form-group">
                            <strong>Diámetro de tubo</strong>
                            <input type="text" autocomplete="off" name="diametrotubo" value="{{ $solicitud->diametrotubo }}"  class="form-control" placeholder="Diámetro de tubo">
                        </div>

                        <div class="form-group">
                            <strong>Diámetro de colector</strong>
                            <input type="text" autocomplete="off" name="diametrocolector" value="{{ $solicitud->diametrocolector }}"  class="form-control" placeholder="Diámetro de colector">
                        </div>

                        <div class="form-group">
                            <label for="select" class="">Nombre del ejecutor</label>
                            <select name="ejecutor_id" class="form-control" id="ejecutor" >
                                @foreach($ejecutor as $ejecutores)
                                @if ($ejecutores->id==$solicitud->ejecutor_id)
                                <option value="{{$ejecutores->id}}" selected>{{$ejecutores->nombre}}</option>
                                @else
                                        <option value="{{$ejecutores->id}}">{{$ejecutores->nombre}}</option>
                                        @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <strong>Estado de factibilidad</strong>
                            <select name="estadofactibilidad_id" id="estadofactibilidad_id"  class="form-control selectpicker" data-live-search="true">
                                
                                    @foreach($estado as $c)
                                      @if ($c->id==$solicitud->estadofactibilidad_id)
                                        <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                                        @else
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                        @endif
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Tipo de obra </strong>
                            <select name="tipoobra_id" id="tipoobra_id"  class="form-control selectpicker" data-live-search="true">
                                
                                  @foreach($tipoobra as $c)
                                        @if ($c->id==$solicitud->tipoobra_id)
                                          <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                                          @else
                                          <option value="{{$c->id}}">{{$c->nombre}}</option>
                                          @endif
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