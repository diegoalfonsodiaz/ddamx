@extends('front.base')

@section('contenido_front')

<!-- //Breadcrumb Section End -->
    <!-- Map Section Start -->
    <div class="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.6322129269306!2d-91.51916458704228!3d14.84588568964666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858ea2abe445135f%3A0x7acaa13185a28559!2sEmpresa%20Municipal%20Aguas%20de%20Xelaj%C3%BA!5e0!3m2!1ses-419!2sgt!4v1569819907699!5m2!1ses-419!2sgt" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        
    </div>
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Formulario</h3>
            <!-- /.box-header -->
            <!-- form start -->
                <form action="{{ route('contacto.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre</strong>
                <input type="text" name="nombre" class="form-control" placeholder="nombre">
            </div>
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                <strong>Descripcion</strong>
                <input type="text" name="descripcion" class="form-control" placeholder="descripcion">
            </div>        
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
   
    </form>
            </div>

        </div>
    </div>


@stop