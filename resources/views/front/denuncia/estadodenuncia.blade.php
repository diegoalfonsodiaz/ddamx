@extends('layouts/default')


@section('content')
<!-- Main content -->
<section class="content paddingleft_right15">
 <h2>
                    Estado de su denuncia
                </h2>
    <div class="row">
        <div class="panel panel-primary ">
  

            <br />
            <div class="panel-body">
                <div class="table-responsive">
                <table class="table table-bordered width100" id="table">
                    <thead>
                            <tr>
                            
                                <th>Dirección y descripción de la denuncia</th>
                                <th width="110px">Fecha</th>
                                <th>Fotografía del denunciante</th>
                                <th>Fotografía de solución</th>
                                <th>Nombre del contacto</th> 
                                <th>Estado de la denuncia</th>
                                <th width="200px">Fecha de actualizacion de estado</th>           
                            </tr>
                        </thead>
                        <tbody>
                @foreach ($denuncia as $den)
                    <tr>
                        <td><h5>{{ $den->descripcion }}</h5></td>
                        <td>{{ $den->fecha }}</td>
                        <td>
                        <div class="center">
                        <img style="width:150px;height:100px;" src="images/{{ $den->foto }}" class="card-img-top" alt="Imagen no encontrada">
                        <a target="_blank" href="images/{{ $den->foto }}">Abrir</a>
                        </div>
                        </td>
                        
                        <td>
                            @if($den->fotografia == "Sin fotografía")
                
                                {{ $den->fotografia }}
                            
                            @else

                                <div class="center">
                                <img style="width:150px;height:100px;" src="images/{{ $den->fotografia }}" class="card-img-top" alt="Imagen no encontrada">
                                <a target="_blank" href="images/{{ $den->fotografia }}">Abrir</a>
                                </div>
                            @endif
                        </td>

                        <td>{{ $den->direccion }}</td>
                        <td>{{ $den->estadodeladenuncia}}</td>
                        <td>{{ $den->estadoactualizado}}</td>
                    </tr>
                @endforeach
            </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>    <!-- row-->
</section>

@stop