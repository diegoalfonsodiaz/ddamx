@extends('admin.principal')
@section('contenido')

<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            
              <h3>{{$consultasolicitud}}</h3>

              <p>Solicitudes totales</p>
            </div>
            <div class="icon">
              <i class="ion-ios-folder"></i>
            </div>
            <a href="/solicitud" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$consultapersona}}<sup style="font-size: 20px"></sup></h3>

              <p>Personas registradas</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/persona" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$licencia}}</h3>

              <p>Licencias</p>
            </div>
            <div class="icon">
              <i class="ion-ios-copy"></i>
            </div>
            <a href="/licencia" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$contactos}}</h3>

              <p>Contactos</p>
            </div>
            <div class="icon">
              <i class="ion-ios-contact"></i>
            </div>
            <a href="/contacto" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Denuncias</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th scope="col" width="700px"><p style="color:skyblue;">Descripción</p></th>
                    <th scope="col" width="200px"><p style="color:skyblue;">Fecha de emisión</p></th>
                    <th scope="col" width="300px"><p style="color:skyblue;">Dirección</p></th>
                    <th scope="col" width=200px"><p style="color:skyblue;">Estado de denuncia</p></th>
                  </tr>



                  </thead>
                  <tbody>
                  <tr>
                  @foreach($denuncia as $denuncias)
                  <td> <p>{{$denuncias->descripcion}}</p>  </td>
                  <td>{{$denuncias->fecha}}</td>
                  <td>{{$denuncias->direccion}}</td>
                  <td> <span class="label label-danger">{{$denuncias->d}}</span></td>
                  </tr>
                  @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="/denuncia" class="btn btn-sm btn-primary btn-flat pull-right">Ver todas las denuncias</a>
            </div>
            <!-- /.box-footer -->
          </div>

          <div class="col-md-6">
                  <p class="text-left">
                  <strong style="color:orange;">Información de solicitudes</strong>
                  </p>
                  <div class="progress-group">
                    <span class="progress-text">Solicitudes factibles</span>
                    <span class="progress-number"><b>{{$solicitudfac}}</b>/{{$consultasolicitud}}</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Solicitudes no factibles</span>
                    <span class="progress-number"><b>{{$consultasolicitudnofac}}</b>/{{$consultasolicitud}}</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Solicitudes en proceso</span>
                    <span class="progress-number"><b>{{$solproceso}}</b>/{{$consultasolicitud}}</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Solicitudes sin procesar</span>
                    <span class="progress-number"><b>{{$solsinprocesar}}</b>/{{$consultasolicitud}}</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                



                
                <p class="text-left">
                 <strong style="color:orange;">Información general</strong>
                 </p>
                <div class="col-md-6">
                            <div class="info-box bg-orange">
                        <span class="info-box-icon"><i class="ion-arrow-down-a"></i></span>

                        <div class="info-box-content">
                        <span class="info-box-text">Personas inactivas</span>
                        <span class="info-box-number"><b>{{$consultapersonadesac}}</b>/{{$consultapersona}}</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                                
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                            </div>

                            <div class="info-box bg-blue">
                            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Licencias con emisión de orden de pago</span>
                            <span class="info-box-number">{{$licenciaemision}}</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            <span class="progress-description">
                                    
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>




                </div>

                

@stop