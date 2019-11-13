@extends('layouts/default')


@section('content')
<!-- Main content -->
<div class="container">
<section class="content paddingleft_right15">
 <h2>
                    Solicitudes de factibilidad registradas
                </h2>
    <div class="row">
        <div class="panel panel-primary ">
  

            <br />
            <div class="panel-body">
                <div class="table-responsive">
                 @if(Session::has('mensaje'))
                    <div style="color:#FF0000; font-size:25px;">{{Session::get('mensaje')}}</div>
                @endif
                </div>
                <br> </br>
                <div class="col-md-5 col-sm-5 col-xs-12"><a href="{{ url('/buscardpi') }}" class="btn btn-primary purchase-styl ">Solicita ahora</a></div>
            </div>
        </div>
    </div>    <!-- row-->
</section>
</div>  
@stop