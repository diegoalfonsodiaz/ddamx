@extends('admin.principal')
@section('contenido')
<div class="box box-primary" >
            <div class="box-header with-border">
              <h1 class="box-title">Editar Solicitud Factibilidad </h1>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('solicitud.update', $solicitud->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <!-- personas -->
                        <div class="form-group">
                            <label for="select" class="">Persona</label>
                            <select name="persona_id" class="form-control" id="persona">}
                                
                                @foreach($persona as $carac)
                                @if ($carac->id==$solicitud->persona_id)
                                <option value="{{$carac->id}}">{{$carac->nombre}}</option>
                                @else
                                <option value="{{$carac->id}}">{{$carac->nombre}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
 

                        <div class="form-group">
                            <strong>Direccion Obra</strong>
                            <input type="text" name="direccionobra"  value="{{ $solicitud->direccionobra }}" class="form-control" placeholder="Direccion Obra">
                        </div>

                        <div class="form-group">
                            <strong>Codigo Inmueble</strong>
                            <input type="text" name="codigoinmueble" value="{{ $solicitud->codigoinmueble }}"  class="form-control" placeholder="Codigo Inmueble">
                        </div>

                        <div class="form-group">
                            <strong>Expediente</strong>
                            <input type="text" name="expediente" value="{{ $solicitud->expediente }}"  class="form-control" placeholder="Expediente">
                        </div>

                        <div class="">
                            <strong>Expediente Interno</strong>
                            <input type="text" name="expedienteinterno" value="{{ $solicitud->expedienteinterno }}"  class="form-control" placeholder="Expediente Interno">
                        </div>

                        <div class="form-group">
                            <label for="direccion_fab">Fecha</label>
                            <input type="date" name="fechasolicitud" value="{{ $solicitud->fechasolicitud }}"  class="form-control" >
                        </div>

                        <div class="form-group">
                            <strong>Número Finca</strong>
                            <input type="text" name="numerofinca" value="{{ $solicitud->numerofinca }}"  class="form-control" placeholder="Numero Finc">
                        </div>

                        <div class="form-group">
                            <strong>Número Folio</strong>
                            <input type="text" name="numerofolio" value="{{ $solicitud->numerofolio }}"  class="form-control" placeholder="Número Folio">
                        </div>

                        <div class="form-group">
                            <strong>Libro</strong>
                            <input type="text" name="libro" value="{{ $solicitud->libro }}"  class="form-control" placeholder="Libro">
                        </div>

                        <div class="form-group">
                            <strong>Catastral</strong>
                            <input type="text" name="catastral" value="{{ $solicitud->catastral }}"  class="form-control" placeholder="Catastral">
                        </div>

                        <div class="form-group">
                            <strong>Solvencia Municipal</strong>
                            <input type="text" name="solvenciamunicipal" value="{{ $solicitud->solvenciamunicipal }}"  class="form-control" placeholder="Solvencia Municipal">
                        </div>

                        <div class="form-group">
                            <strong>Observación</strong>
                            <input type="text" name="observacion" value="{{ $solicitud->observacion }}"  class="form-control" placeholder="Observación">
                        </div>

                        <div class="form-group">
                            <strong>Longitud</strong>
                            <input type="text" name="longitud" value="{{ $solicitud->longitud }}"  class="form-control" placeholder="Longitud">
                        </div>

                        <div class="form-group">
                            <strong>Ancho</strong>
                            <input type="text" name="ancho" value="{{ $solicitud->ancho }}"  class="form-control" placeholder="Ancho">
                        </div>

                        <div class="form-group">
                            <strong>Profundidad</strong>
                            <input type="text" name="profundidad" value="{{ $solicitud->profundidad }}"  class="form-control" placeholder="Profundidad">
                        </div>

                        <div class="form-group">
                            <strong>Diametro Tubo</strong>
                            <input type="text" name="diametrotubo" value="{{ $solicitud->diametrotubo }}"  class="form-control" placeholder="Diametro Tubo">
                        </div>

                        <div class="form-group">
                            <strong>Diametro Colector</strong>
                            <input type="text" name="diametrocolector" value="{{ $solicitud->diametrocolector }}"  class="form-control" placeholder="Diametro Colector">
                        </div>

                        <div class="form-group">
                            <strong>Ejecutor</strong>
                            <select name="ejecutor_id" id="ejecutor_id"  class="form-control selectpicker" data-live-search="true">
                                
                                @foreach($ejecutor as $c)
                                      @if ($c->id==$solicitud->persona_id)
                                        <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                                        @else
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                        @endif
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Estado Factibilidad</strong>
                            <select name="estadofactibilidad_id" id="estadofactibilidad_id"  class="form-control selectpicker" data-live-search="true">
                                
                                    @foreach($estado as $c)
                                      @if ($c->id==$solicitud->persona_id)
                                        <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                                        @else
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                        @endif
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Tipo obra </strong>
                            <select name="tipoobra_id" id="tipoobra_id"  class="form-control selectpicker" data-live-search="true">
                                
                                  @foreach($tipoobra as $c)
                                        @if ($c->id==$solicitud->persona_id)
                                          <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                                          @else
                                          <option value="{{$c->id}}">{{$c->nombre}}</option>
                                          @endif
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
$('#persona').select2({
  theme: "classic"
});
</script>


@stop