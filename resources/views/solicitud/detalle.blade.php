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
                            <strong>Nombre del propietario</strong>
                           <!-- <input type="text" name="direccionobra"  value="{{ '$solicitudes->nombre_persona'}}" class="form-control" placeholder="Direccion Obra" disabled>-->
                          <input type="text"  value="<?php echo $persona; ?>" class="form-control" placeholder="Nombre del propietario" disabled>
                        

                        </div>
 

                        <div class="form-group">
                            <strong>Dirección de la obra</strong>
                            <input type="text" name="direccionobra"  value="{{ $solicitudes->direccionobra }}" class="form-control" placeholder="Dirección de la obra" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Código de inmueble</strong>
                            <input type="text" name="codigoinmueble" value="{{ $solicitudes->codigoinmueble }}"  class="form-control" placeholder="Código de inmueble" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Número de expediente</strong>
                            <input type="text" name="expediente" value="{{ $solicitudes->expediente }}"  class="form-control" placeholder="Número de expediente" disabled>
                        </div>

                        <div class="">
                            <strong>Expediente interno</strong>
                            <input type="text" name="expedienteinterno" value="{{ $solicitudes->expedienteinterno }}"  class="form-control" placeholder="Expediente interno" disabled>
                        </div>

                        <div class="form-group">
                            <label for="direccion_fab">Fecha</label>
                            <input type="date" name="fechasolicitud" value="{{ $solicitudes->fechasolicitud }}"  class="form-control"  >
                        </div>

                        <div class="form-group">
                            <strong>Número de finca</strong>
                            <input type="text" name="numerofinca" value="{{ $solicitudes->numerofinca }}"  class="form-control" placeholder="Número de finca" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Número de folio</strong>
                            <input type="text" name="numerofolio" value="{{ $solicitudes->numerofolio }}"  class="form-control" placeholder="Número de folio" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Libro</strong>
                            <input type="text" name="libro" value="{{ $solicitudes->libro }}"  class="form-control" placeholder="Libro" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Número de catastral</strong>
                            <input type="text" name="catastral" value="{{ $solicitudes->codigoinmueble }}"  class="form-control" placeholder="Número de catastral" disabled>
                        </div>
                </div>
           
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
        
            <div class="box-body">
            <div class="form-group">
                            <strong>Solvencia municipal</strong>
                            <input type="text" name="solvenciamunicipal" value="{{ $solicitudes->solvenciamunicipal }}"  class="form-control" placeholder="Solvencia municipal" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Observación</strong>
                            <input Type="text" name="observacion" value="{{ $solicitudes->observacion }}"  class="form-control" placeholder="Observación" disabled>
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
                            <input type="text" name="profundidad" value="{{ $solicitudes->profundidad }}"  class="form-control" placeholder="Profundidad Metros aprox." disabled>
                        </div>

                        <div class="form-group">
                            <strong>Diámetro de tubo</strong>
                            <input type="text" name="diametrotubo" value="{{ $solicitudes->diametrotubo }}"  class="form-control" placeholder="Diámetro de tubo" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Diámetro de colector</strong>
                            <input type="text" name="diametrocolector" value="{{ $solicitudes->diametrocolector }}"  class="form-control" placeholder="Diámetro de colector" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Nombre del ejecutor</strong>
                            <input type="text" name="diametrocolector" value="{{ $solicitudes->nombre_ejecutor }}"  class="form-control" placeholder="Nombre del ejecutor" disabled>
                        </div>
                        <div class="form-group">
                            <strong>Estado de factibilidad</strong>
                            <input type="text" name="diametrocolector" value="{{ $solicitudes->nombre_estadofactibilidad  }}"  class="form-control" placeholder="Estado de factibilidad" disabled>
                        </div>
                        <div class="form-group">
                            <strong>Tipo de obra</strong>
                            <input type="text" name="diametrocolector" value="{{ $solicitudes->nombre_tipoobra }}"  class="form-control" placeholder="Tipo de obra" disabled>
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