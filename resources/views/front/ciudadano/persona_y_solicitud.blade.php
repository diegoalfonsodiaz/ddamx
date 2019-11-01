@extends('layouts/default')


{{-- Page content --}}
@section('content')
@if(count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>    
        </ul>  
        
    @endforeach
    </div>
@endif


    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h2>Ingresa tus datos personales:</h2>
                <label><span style="color:red">* </span><span style="color:black">Campos obligatorios</span></label>

                <form role="form" method="POST" action="{{route('solicitudexterna.store')}}">
                {{csrf_field()}}   {{ method_field('PUT')}}

                    <div class="box-body">
                      <div class="form-group">
                      <strong >DPI</strong>
                      <input type="text" class="form-control input-lg" name="dpi"  readonly="readonly" value={{$dpi}} placeholder="DPI" required>
                      </div>
                      <div class="form-group">
                      <strong >Nombres<span style="color:red"> *</span></strong>
                      <input type="text" class="form-control input-lg" name="nombre" placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                      <strong >Apellidos<span style="color:red"> *</span></strong>
                      <input type="text" class="form-control input-lg" name="apellido" placeholder="Apellidos" required>
                      </div>
                      <div class="form-group">
                      <strong >Ornato<span style="color:red"> *</span></strong>
                      <input type="text" class="form-control input-lg" name="ornato" placeholder="Ornato" required>
                      </div>
                      <div class="form-group">
                      <strong >Teléfono<span style="color:red"> *</span></strong>
                      <input type="text" class="form-control input-lg" name="telefono" placeholder="Teléfono" required >
                      </div>
                      <div class="form-group">
                      <strong >Correo electrónico</strong>
                      <input type="email" class="form-control input-lg " name="correo" placeholder="Correo electrónico">
                      </div>
                      <div class="box-header with-border">
                      <h3 class="box-title">Ingresa los datos de la obra:</h3>
                      </div>
                      <div class="form-group">
                      <strong>Dirección de la obra<span style="color:red"> *</span></strong>
                      <input type="text" name="direccionobra" class="form-control input-lg " placeholder="Dirección de la Obra" required>
                      </div>

                      <div class="form-group">
                      <strong>Código inmueble</strong>
                      <input type="text" name="codigoinmueble" class="form-control input-lg " placeholder="Código inmueble">
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                      {!! htmlFormSnippet() !!}
                      </div> 

                      <label></label>

                    </div>
                    <!-- /.box-body -->
                    
                    <div class="box-footer">
                      <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>

                    <label></label>
                    
                </form>
            </div>
            <!-- //Conatc Form Section End -->
        </div>
    </div>
    
@stop


{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
     <script type="text/javascript" src="{{ asset('front_end/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_end/vendors/wow/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_end/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_end/js/frontend/aboutus.js') }}"></script>
    <!--page level js ends-->
@stop
