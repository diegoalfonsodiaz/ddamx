@extends('admin.principal')
@section('header')
    <h1>
        Detalle solicitud
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Detalle</li>
      </ol>
@stop
@section('contenido')
@foreach($solicitud as $solicitudes)
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
                <div class="box-body">
                <?php
                $persona= $solicitudes->dpi.", " .$solicitudes->nombre_persona." ".$solicitudes->apellido;
                ?>
                       <!-- personas -->
                       <div class="form-group">
                            <strong>Propietario</strong>
                           <!-- <input type="text" name="direccionobra"  value="{{ '$solicitudes->nombre_persona'}}" class="form-control" placeholder="Direccion Obra" disabled>-->
                          <input type="text"  value="<?php echo $persona; ?>" class="form-control" placeholder="Direccion Obra" disabled>
                        

                        </div>
 

                        <div class="form-group">
                            <strong>Direccion Obra</strong>
                            <input type="text" name="direccionobra"  value="{{ $solicitudes->direccionobra }}" class="form-control" placeholder="Direccion Obra" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Codigo Inmueble</strong>
                            <input type="text" name="codigoinmueble" value="{{ $solicitudes->codigoinmueble }}"  class="form-control" placeholder="Codigo Inmueble" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Expediente</strong>
                            <input type="text" name="expediente" value="{{ $solicitudes->expediente }}"  class="form-control" placeholder="Expediente" disabled>
                        </div>

                        <div class="">
                            <strong>Expediente Interno</strong>
                            <input type="text" name="expedienteinterno" value="{{ $solicitudes->expedienteinterno }}"  class="form-control" placeholder="Expediente Interno" disabled>
                        </div>

                        <div class="form-group">
                            <label for="direccion_fab">Fecha</label>
                            <input type="date" name="fechasolicitud" value="{{ $solicitudes->fechasolicitud }}"  class="form-control" disabled >
                        </div>

                        <div class="form-group">
                            <strong>Número Finca</strong>
                            <input type="text" name="numerofinca" value="{{ $solicitudes->numerofinca }}"  class="form-control" placeholder="Número Finca" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Número Folio</strong>
                            <input type="text" name="numerofolio" value="{{ $solicitudes->numerofolio }}"  class="form-control" placeholder="Número Folio" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Libro</strong>
                            <input type="text" name="libro" value="{{ $solicitudes->libro }}"  class="form-control" placeholder="Libro" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Catastral</strong>
                            <input type="text" name="catastral" value="{{ $solicitudes->catastral }}"  class="form-control" placeholder="Catastral" disabled>
                        </div>
                </div>
           
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
        
            <div class="box-body">
            <div class="form-group">
                            <strong>Solvencia Municipal</strong>
                            <input type="text" name="solvenciamunicipal" value="{{ $solicitudes->solvenciamunicipal }}"  class="form-control" placeholder="Solvencia Municipal" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Observación</strong>
                            <textarea type="text" name="observacion" value="{{ $solicitudes->observacion }}" class="form-control" rows="3" placeholder="Observación" disabled></textarea>
                        </div>

                        <div class="form-group">
                            <strong>Longitud</strong>
                            <input type="text" name="longitud" value="{{ $solicitudes->longitud }}"  class="form-control" placeholder="Longitud" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Ancho</strong>
                            <input type="text" name="ancho" value="{{ $solicitudes->ancho }}"  class="form-control" placeholder="Ancho" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Profundidad</strong>
                            <input type="text" name="profundidad" value="{{ $solicitudes->profundidad }}"  class="form-control" placeholder="Profundidad" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Diametro Tubo</strong>
                            <input type="text" name="diametrotubo" value="{{ $solicitudes->diametrotubo }}"  class="form-control" placeholder="Diametro Tubo" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Diametro Colector</strong>
                            <input type="text" name="diametrocolector" value="{{ $solicitudes->diametrocolector }}"  class="form-control" placeholder="Diametro Colector" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Ejecutor</strong>
                            <input type="text" name="diametrocolector" value="{{ $solicitudes->nombre_ejecutor }}"  class="form-control" placeholder="Diametro Colector" disabled>
                        </div>
                        <div class="form-group">
                            <strong>Estado Factibilidad</strong>
                            <input type="text" name="diametrocolector" value="{{ $solicitudes->nombre_estadofactibilidad  }}"  class="form-control" placeholder="Diametro Colector" disabled>
                        </div>
                        <div class="form-group">
                            <strong>Tipo de obra</strong>
                            <input type="text" name="diametrocolector" value="{{ $solicitudes->nombre_tipoobra }}"  class="form-control" placeholder="Diametro Colector" disabled>
                        </div>
        
                        <div class="form-group">
            
                                <a href="{{route('solicitud.index')}}" class="btn btn-danger pull-right"> Regresar</a> 

                         </div>

            </div>
        </div>
    </div>
    
  
</div>
@endforeach
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script >
$('#persona').select2({
  theme: "classic"
});
</script>


@stop