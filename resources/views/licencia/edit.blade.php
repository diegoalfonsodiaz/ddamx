@extends('admin.principal')
@section('contenido')
<div class="box box-primary" >
            <div class="box-header with-border">
              <h1 class="box-title">Editar Licencia </h1>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('licencia.update', $licencia->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <!-- personas -->
                        <div class="form-group">
                            <label for="select" class="">Solicitud Factibilidad (Ingrese Codigo Inmueble)</label>
                            <select name="persona_id" class="form-control" id="persona">}
                                
                                @foreach($solicitud as $carac)
                                @if ($carac->id==$licencia->id)
                                <option value="{{$carac->id}}">{{$carac->codigoinmueble}}</option>
                                @else
                                <option value="{{$carac->id}}">{{$carac->codigoinmueble}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
 

                        <div class="form-group">
                            <strong>Numero Licencia</strong>
                            <input type="text" name="numerolicencia"  value="{{ $licencia->numerolicencia }}" class="form-control" placeholder="Numero Licencia">
                        </div>

                        <div class="form-group">
                            <label for="direccion_fab">Fecha Autorización</label>
                            <input type="date" name="fechaautorizacion" value="{{ $licencia->fechaautorizacion }}"  class="form-control" >
                        </div>

                        <div class="form-group">
                            <strong>Recibo</strong>
                            <input type="text" name="recibo" value="{{ $licencia->recibo }}"  class="form-control" placeholder="Recibo">
                        </div>

                        <div class="form-group">
                            <strong>Monto</strong>
                            <input type="text" name="monto" value="{{ $licencia->monto }}"  class="form-control" placeholder="Monto">
                        </div>

                        <div class="form-group">
                            <strong>Derecho</strong>
                            <input type="text" name="derecho" value="{{ $licencia->derecho }}"  class="form-control" placeholder="Derecho">
                        </div>

                        <div class="form-group">
                            <strong>Remocion</strong>
                            <input type="text" name="remocion" value="{{ $licencia->remocion }}"  class="form-control" placeholder="Remocion">
                        </div>

                        <div class="form-group">
                            <label for="direccion_fab">Fecha Remoción</label>
                            <input type="date" name="fechaconexion" value="{{ $licencia->fechaconexion }}"  class="form-control" >
                        </div>


                        <div class="form-group">
                            <strong>Estado licencia</strong>
                            <select name="estadolicencia_id" id="estadolicencia_id"  class="form-control selectpicker" data-live-search="true">
                                
                                @foreach($estado as $c)
                                      @if ($c->id==$licencia->estadolicencia_id)
                                        <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                                        @else
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                        @endif
                                    @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <strong>Tipo Vía </strong>
                            <select name="tipovia_id" id="tipovia_id"  class="form-control selectpicker" data-live-search="true">
                                
                                  @foreach($tipovia as $c)
                                        @if ($c->id==$licencia->tipovia_id)
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