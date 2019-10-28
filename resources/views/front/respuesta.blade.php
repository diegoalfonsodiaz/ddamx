@extends('layouts/default')


@section('content')
<!-- Main content -->
<section class="content paddingleft_right15">
@if(Session::has('mensajetipo'))
                    <h2 style="color:#0e70cc; font-size:25px;">{{Session::get('mensajetipo')}}</h2>
                @endif
    <div class="row">
        <div class="panel panel-primary ">
  

            <br />
            <div class="panel-body">
                <div class="table-responsive">
                 @if(Session::has('mensaje'))
                    <div style=" font-size:25px;">{{Session::get('mensaje')}}</div>
                @endif
                </div>
                <br> </br>
            </div>
        </div>
    </div>    <!-- row-->
</section>

@stop