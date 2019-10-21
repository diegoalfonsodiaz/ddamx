@extends('front.base')

@section('contenido_front')
<div class="container">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ingrese su DPI</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('solicituddpiestado.solicitardpiestado')}}">
            {{csrf_field()}}{{ method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label >*Sin espacios</label>
                  <input type="text" class="form-control input-lg" name="dpi" placeholder="DPI" required>
                </div>
    
                

                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
          </div>
          </div>

@stop
