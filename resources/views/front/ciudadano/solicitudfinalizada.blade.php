@extends('layouts/default')


@section('content')
<!-- Main content -->
<section class="content paddingleft_right15">
 <h2 style = "color: #0269c9;">
                    ¡Solicitud de factibilidad registrada exitosamente!
                </h2>
    <div class="row">
        <div class="panel panel-primary ">
  

            <br />
            <div class="panel-body">
 
                <h2 style="size: 45px; font-family: Georgia;">
                    Complete los siguientes pasos para obtener su licencia.
                </h2>
                <div class="col-md-9 col-sm-9 col-xs-12 wow zoomIn" data-wow-duration="2s">

                    <div class="layout-image">
                        <img src="{{ asset('front_end/images/Proceso_licencia.png') }}" alt="layout" class="img-responsive" />
                    </div>
                </div>

                
            </div>
        </div>
    </div>    <!-- row-->
</section>

@stop