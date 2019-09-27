@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Cargo ejecutor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('products.store') }}" method="POST">
              @csrf
            
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Name:</strong>
                          <input type="text" name="name" class="form-control" placeholder="Name">
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Detail:</strong>
                          <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
            
          </form>
          </div>
@stop