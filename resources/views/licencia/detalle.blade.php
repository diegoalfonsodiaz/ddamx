@extends('admin.principal')
@section('header')
    <h1>
        Detalle de licencia
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio </a></li>
        <li class="active">licencias</li>
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
                        @foreach($datos as $dato)
                        <div class="form-group">
                            <strong>Nombres</strong>
                            <input type="text" name="codigoinmueble"  value="{{ $dato->nombre_persona }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Apellidos</strong>
                            <input type="text" name="codigoinmueble"  value="{{ $dato->apellido }}" class="form-control" placeholder="Fecha Autorizacion" disabled>
                        </div>
                        @endforeach
                       

                        <div class="form-group">
                            <strong>Número de licencia</strong>
                            <input type="text" name="numerolicencia"  value="{{ $licencias->numerolicencia }}" class="form-control" placeholder="Número de licencia" disabled>
                        </div>

                        <div class="form-group">
                            <strong>Fecha de autorización</strong>
                            <input type="text" name="fechaautorizacion"  value="{{ $licencias->fechaautorizacion }}" class="form-control" placeholder="Fecha de Autorizacion" disabled>
                        </div>

                        
                        <div class="form-group">
                            <strong>Tipo de Vía</strong>
                            <input type="text" name="tipovia"  value="{{ $licencias->tipovia }}" class="form-control" placeholder="Tipo de vía" disabled>
                        </div>

                       

                       

                       
            </div>
        </div>
    </div>
    

    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-body">
            <div class="form-group">
                            <strong>Número de recibo</strong>
                            <input type="text" name="recibo"  value="{{ $licencias->recibo }}" class="form-control" placeholder="Número de recibo" disabled>
                        </div>

                         <div class="form-group">
                            <strong>Derecho</strong>
                            <input type="text" name="derecho"  value="{{ $licencias->derecho }}" class="form-control" placeholder="Derecho" disabled>
                        </div>
                        
                         <div class="form-group">
                            <strong>Remosión</strong>
                            <input type="text" name="remocion"  value="{{ $licencias->remocion }}" class="form-control" placeholder="Remosión" disabled>
                        </div>

                        

                        <div class="form-group">
                            <strong>Fecha de conexión y/o lo que compete</strong>
                            <input type="text" name="monto"  value="{{ $licencias->monto }}" class="form-control" placeholder="Fecha de conexión y/o lo que compete" disabled>
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