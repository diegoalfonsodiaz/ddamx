@extends('admin.principal')

@section('header')
<h1>
        Historial solicitud factibilidad
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">historial</li>
        
      </ol>
      
@stop
@section('contenido')

<div class="box-header">
           

<div class="box box-primary">
 
<ul>
    @forelse ($audits as $audit)
    <li>
        @lang('licencia.updated.metadata', $audit->getMetadata())

        @foreach ($audit->getModified() as $attribute => $modified)
        <ul>
        
        <li>@lang('licencia.'.$audit->event.'.modified.'.$attribute, $modified)</li>
    
            
           
        </ul>
        @endforeach
    </li>
    @empty
    <p>@lang('licencia.unavailable_audits')</p>
    @endforelse
</ul>
</div>
</div>

@stop