@extends('admin.principal')
@section('contenido')

 <!-- Main content -->
 <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
           <h3> <center>{{$consulta}}</center></h3>

              <p>DENUNCIAS AGREGADAS RECIENTEMENTE</p>
            </div>
            <div class="icon">
              <i class="ion-ios-paper-outline">  </i>
            </div>
            <a href="{{url('denuncia')}}" class="small-box-footer">PRESIONE PARA VERIFICAR <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><center>{{$licencia}}<sup style="font-size: 100px"></sup><center></h3>

                     <center>  LICENCIAS ACTIVAS </center>
            </div>
            <div class="icon">
              <i class="ion-flag"></i>
            </div>
            <a href="{{url('licencia')}}" class="small-box-footer">PRESIONE PARA VERIFICAR <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><center>{{$consultapersona}}<sup style="font-size: 100px"></sup><center></h3>

                     <center> PERSONAS ACTIVAS </center>
            </div>
            <div class="icon">
              <i class="ion-ios-people"></i>
            </div>
            <a href="{{url('persona')}}" class="small-box-footer">PRESIONE PARA VERIFICAR <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3> <center>{{$consultapersonadesac}}<sup style="font-size: 100px"></sup> </center></h3>

                     <center> PERSONAS DE BAJA </center>
            </div>
            <div class="icon">
              <i class="ion-ios-close-empty"></i>
            </div>
            <a href="{{url('persona')}}" class="small-box-footer">PRESIONE PARA VERIFICAR <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <center>{{$consultasolicitud}}</center></h3>

              <center> SOLICITUDES FACTIBLES </center>
            </div>
            <div class="icon">
              <i class="ion-ios-checkmark-empty"></i>
            </div>
            <a href="{{url('solicitud')}}" class="small-box-footer">PRESIONE PARA VERIFICAR <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
           <!-- ./col -->
           <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3> <center>{{$consultasolicitudnofac}}</center></h3>
              <center> SOLICITUDES NO FACTIBLES </center>
            </div>
            <div class="icon">
              <i class="ion-android-hand"></i>
            </div>
            <a href="{{url('solicitud')}}" class="small-box-footer">PRESIONE PARA VERIFICA <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3> <center>{{$licenciadesc}}</center></h3>
              <center> LICENCIAS DESACTIVADAS </center>
            </div>
            <div class="icon">
              <i class="ion-toggle"></i>
            </div>
            <a href="{{url('licencia')}}" class="small-box-footer">PRESIONE PARA VERIFICA <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
           <!-- ./col -->
           <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3> <center>INSERT</center></h3>
              <center> ---- </center>
            </div>
            <div class="icon">
              <i class="ion-toggle"></i>
            </div>
            <a href="{{url('licencia')}}" class="small-box-footer">PRESIONE PARA VERIFICA <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
        </section>
        <!-- right col -->
    </section>
@stop