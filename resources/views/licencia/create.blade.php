@extends('admin.principal')
@section('header')
<h1>
        Crear licencia
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">licencias</li>
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
                        <div class="form-group {{ $errors->has('solicitudfactibilidad_id') ? 'has-error': ''}}">
                            <label for="select" class="">Solicitud de factibilidad (Ingrese el código de inmueble)</label>
                            <select name="solicitudfactibilidad_id" class="form-control"  id="solicitud" >
                                <option value="0" disabled selected >=== Selecciona el código de inmueble ===</option>
                                @foreach($solicitud as $carac)
                                <option value="{{$carac->id}}" >{{$carac->codigoinmueble}}, {{$carac->nombre_persona}} {{$carac->apellido}}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('solicitudfactibilidad_id',' <span class="help-block">Debe seleccionar un código de inmueble ó esta intentando ingresar un inmueble ya existente</span>')!!}

                        </div>


                        <div class="form-group {{ $errors->has('numerolicencia') ? 'has-error': ''}}">
                            <strong>Número de licencia</strong>
                            <input type="text" autocomplete="off" name="numerolicencia" class="form-control" value="{{ old('numerolicencia')}}" placeholder="Número de licencia"  >

                            {!! $errors->first('numerolicencia',' <span class="help-block">Campo obligatorio</span>')!!}
                        </div>

                        <div class="form-group {{ $errors->has('fechaautorizacion') ? 'has-error': ''}}" >
                            <label for="direccion_fab">Fecha de autorización</label>
                            <input type="date" autocomplete="off" name="fechaautorizacion" class="form-control" value="{{ old('fechaautorizacion')}}" >

                            {!! $errors->first('fechaautorizacion',' <span class="help-block">Campo obligatorio</span>')!!}
                        </div>

                        <div class="form-group {{ $errors->has('tipovia_id') ? 'has-error': ''}}">
                            <strong>Tipo de vía </strong>
                            <select name="tipovia_id" id="tipovia_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione Tipo via ===</option>
                                    @foreach($tipovia as $c)
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                    @endforeach
                            </select>
                            {!! $errors->first('tipovia_id',' <span class="help-block">Campo obligatorio</span>')!!}
                        </div>

                        <div class="form-group {{ $errors->has('recibo') ? 'has-error': ''}}">
                            <strong>No. de recibo</strong>
                            <input type="text" autocomplete="off" name="recibo" class="form-control" value="{{ old('recibo')}}" placeholder="No. de recibo" >

                            {!! $errors->first('recibo',' <span class="help-block">Campo obligatorio</span>')!!}
                        </div>

                        

                        <div class="form-group {{ $errors->has('derecho') ? 'has-error': ''}}">
                            <strong>Derecho Q.</strong>
                            <input type="text" autocomplete="off" name="derecho" class="form-control" value="{{ old('derecho')}}" placeholder="Derecho" >

                            {!! $errors->first('derecho',' <span class="help-block">Campo obligatorio</span>')!!}
                        </div>

                        <div class="form-group {{ $errors->has('descripcion') ? 'has-error': ''}}">
                            <strong>Descripción</strong>
                            <input type="text" autocomplete="off" name="descripcion" class="form-control" value="{{ old('descripcion')}}" placeholder="Descripción máximo 60 caracteres" >

                            {!! $errors->first('descripcion',' <span class="help-block">Solo hasta 60 caracteres</span>')!!}
                        </div>

                        <div class="form-group {{ $errors->has('remocion') ? 'has-error': ''}}">
                            <strong>Remosión</strong>
                            <input type="text" autocomplete="off" name="remocion" class="form-control" value="{{ old('remocion')}}" placeholder="Remosión">

                            {!! $errors->first('remocion',' <span class="help-block">Campo obligatorio</span>')!!}
                        </div>

                        

                        <div class="form-group {{ $errors->has('monto') ? 'has-error': ''}}">
                            <strong>Fecha de conexión y/o lo que compete</strong>
                            <input type="text" autocomplete="off" name="monto" class="form-control" value="{{ old('monto')}}" placeholder="Fecha de conexión y/o lo que compete, máximo 90 caracteres" >

                            {!! $errors->first('monto',' <span class="help-block">Solo hasta 90 caracteres</span>')!!}
                        </div>
                        

                        @if (auth()->user()->hasRole(['admin']))
                        <div class="form-group {{ $errors->has('estadolicencia_id') ? 'has-error': ''}}">
                            <strong>Estado de licencia</strong>
                            <select name="estadolicencia_id" id="estadolicencia_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione el estado de la licencia ===</option>
                                @foreach($estado as $c)
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                    @endforeach

                                    
                            </select>

                            {!! $errors->first('estadolicencia_id',' <span class="help-block">Campo obligatorio</span>')!!}
                        </div>
                        @elseif (auth()->user()->hasRole(['jefeoperaciones']))

                        <div class="form-group {{ $errors->has('estadolicencia_id') ? 'has-error': ''}}">
                            <strong>Estado de la licencia</strong>
                            <select name="estadolicencia_id" id="estadolicencia_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione el estado de la licencia ===</option>
                                @foreach($estado as $c)
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                    @endforeach

                                    
                            </select>

                            {!! $errors->first('estadolicencia_id',' <span class="help-block">Campo obligatorio</span>')!!}
                        </div>

                        @elseif (auth()->user()->hasRole(['operaciones']))

                        <div class="form-group {{ $errors->has('estadolicencia_id') ? 'has-error': ''}}">
                            <strong>Estado de licencia</strong>
                            <select name="estadolicencia_id" id="estadolicencia_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione el estado de la licencia ===</option>
                                @foreach($estadooperaciones as $ci)
                                        <option value="{{$ci->id}}">{{$ci->nombre}}</option>
                                    @endforeach

                                    
                            </select>

                            {!! $errors->first('estadolicencia_id',' <span class="help-block">Campo obligatorio</span>')!!}
                        </div>
                        @endif
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