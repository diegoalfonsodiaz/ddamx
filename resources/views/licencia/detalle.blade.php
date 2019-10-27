@extends('admin.principal')
@section('header')
    <h1>
        Detalle Licencia
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio </a></li>
        <li class="active">Detalle</li>
      </ol>
@stop
@section('contenido')
@foreach($licencia as $licencias)
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
                <div class="box-body">

                         <div class="form-group">
                            <strong>Código de inmueble</strong>
                            <input type="text" name="codigoinmueble"  value="{{ $licencias->codigoinmueble }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Número de licencia</strong>
                            <input type="text" name="numerolicencia"  value="{{ $licencias->numerolicencia }}" class="form-control" placeholder="Número licencia" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Fecha de autorización</strong>
                            <input type="text" name="fechaautorizacion"  value="{{ $licencias->fechaautorizacion }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>

                        
                        <div class="form-group">
                            <strong>Tipo de Vía</strong>
                            <input type="text" name="tipovia"  value="{{ $licencias->tipovia }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Número de recibo</strong>
                            <input type="text" name="recibo"  value="{{ $licencias->recibo }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>

                       

                       
            </div>
        </div>
    </div>
    

    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-body">

                         <div class="form-group">
                            <strong>Derecho</strong>
                            <input type="text" name="derecho"  value="{{ $licencias->derecho }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>
                        
                         <div class="form-group">
                            <strong>Remoción</strong>
                            <input type="text" name="remocion"  value="{{ $licencias->remocion }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Fecha de conexión</strong>
                            <input type="text" name="fechaconexion"  value="{{ $licencias->fechaconexion }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Días de procesamiento</strong>
                            <input type="text" name="monto"  value="{{ $licencias->monto }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Estado de licencia</strong>
                            <input type="text" name="nombre"  value="{{ $licencias->nombre }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>


                        <div class="form-group">
            
                                <a href="{{route('licencia.index')}}" class="btn btn-danger pull-right"> Regresar</a> 

                         </div>

                        

            </div>
        </div>
    </div>

</div>

@endforeach



@stop