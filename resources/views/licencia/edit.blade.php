@extends('admin.principal')
@section('header')
<h1>
        Editar licencia
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">licencias</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary" >
            <div class="box-header with-border">
             
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('licencia.update', $licencia->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <!-- personas -->
                        <div class="form-group {{ $errors->has('solicitudfactibilidad_id') ? 'has-error': ''}}">
                            <label for="select" class="">Solicitud de factibilidad (Ingrese el código de inmueble)</label>
                            <select name="solicitudfactibilidad_id" class="form-control" id="codigo">}
                                
                                @foreach($solicitud as $carac)
                                @if ($carac->id==$licencia->solicitudfactibilidad_id)
                                <option value="{{$carac->id}}" selected>{{$carac->codigoinmueble}}</option>
                                @else
                                <option value="{{$carac->id}}">{{$carac->codigoinmueble}}</option>
                                @endif
                                @endforeach
                            </select>

                            {!! $errors->first('solicitudfactibilidad_id',' <span class="help-block">Debe seleccionar un código de inmueble ó esta intentando ingresar un inmueble ya existente</span>')!!}

                        </div>

                        

                        <div class="form-group {{ $errors->has('numerolicencia') ? 'has-error': ''}}">
                            <strong>Número de licencia</strong>
                            <input type="text" autocomplete="off" name="numerolicencia"  value="{{ $licencia->numerolicencia }}" class="form-control" placeholder="Número de icencia">
                            {!! $errors->first('numerolicencia',' <span class="help-block">Campo obligatorio</span>')!!}

                        </div>

                        <div class="form-group {{ $errors->has('fechaautorizacion') ? 'has-error': ''}}" >
                            <label for="direccion_fab">Fecha de autorización</label>
                            <input type="date" name="fechaautorizacion" value="{{ $licencia->fechaautorizacion }}"  class="form-control" >
                            {!! $errors->first('fechaautorizacion',' <span class="help-block">Campo obligatorio</span>')!!}

                        </div>

                        <div class="form-group {{ $errors->has('tipovia_id') ? 'has-error': ''}}">
                            <strong>Tipo de Vía </strong>
                            <select name="tipovia_id" id="tipovia_id"  class="form-control selectpicker" data-live-search="true">
                                
                                  @foreach($tipovia as $c)
                                        @if ($c->id==$licencia->tipovia_id)
                                          <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                                          @else
                                          <option value="{{$c->id}}">{{$c->nombre}}</option>
                                          @endif
                                      @endforeach
                            </select>
                            {!! $errors->first('tipovia_id',' <span class="help-block">Campo obligatorio</span>')!!}

                        </div>


                        <div class="form-group {{ $errors->has('recibo') ? 'has-error': ''}}">
                            <strong>No. de recibo</strong>
                            <input type="text" autocomplete="off" name="recibo" value="{{ $licencia->recibo }}"  class="form-control" placeholder="Recibo">
                            {!! $errors->first('recibo',' <span class="help-block">Campo obligatorio</span>')!!}

                        </div>

                       

                        <div class="form-group {{ $errors->has('derecho') ? 'has-error': ''}}">
                            <strong>Derecho Q.</strong>
                            <input type="text" autocomplete="off" name="derecho" value="{{ $licencia->derecho }}"  class="form-control" placeholder="Derecho">
                            {!! $errors->first('derecho',' <span class="help-block">Campo obligatorio</span>')!!}

                        </div>

                        <div class="form-group {{ $errors->has('remocion') ? 'has-error': ''}}">
                            <strong>Remosión Q.</strong>
                            <input type="text" autocomplete="off" name="remocion" value="{{ $licencia->remocion }}"  class="form-control" placeholder="Remocion">
                            {!! $errors->first('remocion',' <span class="help-block">Campo obligatorio</span>')!!}

                        </div>

                        <div class="form-group {{ $errors->has('fechaconexion') ? 'has-error': ''}}">
                            <label for="direccion_fab">Fecha de conexión</label>
                            <input type="date" name="fechaconexion" value="{{ $licencia->fechaconexion }}"  class="form-control" >
                            {!! $errors->first('fechaconexion',' <span class="help-block">Campo obligatorio</span>')!!}

                        </div>

                        <div class="form-group {{ $errors->has('monto') ? 'has-error': ''}}">
                            <strong>Días de procesamiento</strong>
                            <input type="text" autocomplete="off" name="monto" value="{{ $licencia->monto }}"  class="form-control" placeholder="Días de procesamiento">
                            {!! $errors->first('monto',' <span class="help-block">Campo obligatorio</span>')!!}

                        </div>

                        @if (auth()->user()->hasRole(['admin']))
                            <div class="form-group {{ $errors->has('estadolicencia_id') ? 'has-error': ''}}">
                                <strong>Estado de licencia</strong>
                                <select name="estadolicencia_id" id="estadolicencia_id"  class="form-control selectpicker" data-live-search="true">
                                @foreach($estado as $c)
                                        @if ($c->id==$licencia->estadolicencia_id)
                                            <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                                            @else
                                            <option value="{{$c->id}}">{{$c->nombre}}</option>
                                            @endif
                                        @endforeach
                                
                                </select>
                                {!! $errors->first('estadolicencia_id',' <span class="help-block">Campo obligatorio</span>')!!}
                            </div>
                       
                        @elseif (auth()->user()->hasRole(['jefeoperaciones']))
                            <div class="form-group {{ $errors->has('estadolicencia_id') ? 'has-error': ''}}">
                                <strong>Estado de licencia</strong>
                                <select name="estadolicencia_id" id="estadolicencia_id"  class="form-control selectpicker" data-live-search="true">
                                @foreach($estado as $c)
                                        @if ($c->id==$licencia->estadolicencia_id)
                                            <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                                            @else
                                            <option value="{{$c->id}}">{{$c->nombre}}</option>
                                            @endif
                                        @endforeach
                                
                                </select>
                                {!! $errors->first('estadolicencia_id',' <span class="help-block">Campo obligatorio</span>')!!}
                            </div>

                            @elseif (auth()->user()->hasRole(['operaciones']))
                            <div class="form-group {{ $errors->has('estadolicencia_id') ? 'has-error': ''}}">
                                <strong>Estado de licencia</strong>
                                <select name="estadolicencia_id" id="estadolicencia_id"  class="form-control selectpicker" data-live-search="true">
                                @foreach($estadooperaciones as $ci)
                                        @if ($ci->id==$licencia->estadolicencia_id)
                                            <option value="{{$ci->id}}" selected>{{$ci->nombre}}</option>
                                            @else
                                            <option value="{{$ci->id}}">{{$ci->nombre}}</option>
                                            @endif
                                        @endforeach
                                
                                </select>
                                {!! $errors->first('estadolicencia_id',' <span class="help-block">Campo obligatorio</span>')!!}
                            </div>

                        
                        @endif
                        
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{route('licencia.index')}}" class="btn btn-danger pull-right"> Regresar</a> 

                    </div>
                </div>
   
            </form>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script >
$('#codigo').select2({
  theme: "classic"
});
</script>


@stop