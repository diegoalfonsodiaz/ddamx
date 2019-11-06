<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title></title>
   <style type="text/css">
        p{
            line-height: 70%;
        }
        #p1{
            line-height: 60%;
        }
        
        #especificaciones{
            line-height: 100%;
        }
        #via1{
            width:321px;
            height:204px;
        }
         #ejecutor{
            line-height: 200%;
        }
        #partefinal{
            line-height: 262%;
        }
        #partefinalcortomonto{
            line-height: 398%;
            color: #FFFFFF;
        }
        #partefinalcortolibro{
            line-height: 125%;
        }
        #partefinalcortocatastral{
            line-height: 152%%;
        }
        #partecatastral1{
            line-height: 179%%;
        }
        #partecatastral2{
            line-height: 206%%;
        }
        #tipos{
            line-height: 217%;
        }
        #espacio{
            line-height: 20%;
        }
        #espacio2{
            line-height: 220%;
            color: #FFFFFF;
        }
        
   </style>
</head>
<body>
 <!--<div >
        <div style="background-position: center; position: fixed;  text-align: center; z-index: -1000; ">
        <img src="/images/licencia.jpg" style="width: 21.59cm; height: 27.94cm;">
        </div>
</div>-->
<p id="espacio2">
    hola
</p>
<p id="espacio2" >
    hola
</p>
@foreach($licencia as $licencias)
    
    <p style='text-indent: 33.5em'>
    {{ $licencias->numerolicencia }}
    </p>


     <p style='text-indent: 33.5em'>
    {{ $licencias->expediente }}
    </p>

     <p style='text-indent: 33.5em'>
    {{ $licencias->fechaautorizacion }}
    </p>
@endforeach

@foreach($datos as $dato)
  <p id="p1" style='text-indent: 11.5em'>
    {{ $dato->nombre_persona }} {{ $dato->apellido }}
    </p>
@endforeach

@foreach($licencia as $licencias)

    <p id="p1" style='text-indent: 7em'>
        {{ $licencias->direccionobra }}<br><br><br><br><br><br><br>
    </p>
<!--especificaciones-->

   <!-- <p id="especificaciones" style='text-indent: 31.5em'>
       x{{ $licencias->longitud }}
    </p>-->
@if($licencias->tipovia_id==1)
    <pre id="tipos" >
                                 X              {{ $licencias->longitud }} Metros 


                                                {{ $licencias->ancho }} Metros                                                        


                                                {{ $licencias->profundidad }}


                                                            {{ $licencias->diametrotubo }} "PVC


                                                            {{ $licencias->diametrocolector }} "TC           
    </pre>



@elseif($licencias->tipovia_id==2)
    <pre id="tipos">
                                                {{ $licencias->longitud }} Metros  


                                 X               {{ $licencias->ancho }} Metros                                                       


                                                {{ $licencias->profundidad }}


                                                            {{ $licencias->diametrotubo }} "PVC


                                                            {{ $licencias->diametrocolector }} "TC            
    </pre>



@elseif($licencias->tipovia_id==3)
    <pre id="tipos">
                                                {{ $licencias->longitud }} Metros   


                                                {{ $licencias->ancho }} Metros                                   


                                 X               {{ $licencias->profundidad }}


                                                            {{ $licencias->diametrotubo }} "PVC


                                                            {{ $licencias->diametrocolector }} "TC            
    </pre>


@elseif($licencias->tipovia_id==4)
    <pre id="tipos">
                                                {{ $licencias->longitud }} Metros  


                                                {{ $licencias->ancho }} Metros                                                       


                                                {{ $licencias->profundidad }}


                                 X                           {{ $licencias->diametrotubo }} "PVC


                                                            {{ $licencias->diametrocolector }} "TC            
    </pre>


@elseif($licencias->tipovia_id==5)
    <pre id="tipos">
                                                {{ $licencias->longitud }} Metros  


                                                {{ $licencias->ancho }} Metros                                


                                                {{ $licencias->profundidad }}


                                                            {{ $licencias->diametrotubo }} "PVC


                                 X                          {{ $licencias->diametrocolector }}"TC            
    </pre>
@endif
<!--fin de especifiaciones-->

@endforeach
<!--ejecutor-->
@foreach($datos as $dato)
    <p id="ejecutor" style='text-indent: 12em'>
        {{ $dato->nombre_ejecutor }}
    </p>

    <p id="ejecutor" style='text-indent: 11em'>
        {{ $dato->direccion_ejecutor}}
    </p>
@endforeach
<!--fin de ejecutor-->

<!--ultima parte-->

@foreach($licencia as $licencias)
    <p id="partefinal" style='text-indent: 24em'>
        Recibo de tesorería No.{{ $licencias->recibo }}
    </p>
    
    <p id="partefinalcortomonto" style='text-indent: 24em'>
        Q.{{ $licencias->monto }}
    </p>
    <pre id="partefinalcortolibro" style='text-indent: 0.5em'>
            Q.{{ $licencias->derecho }}                             {{ $licencias->remocion }}                    
    </pre>

    <pre id="partefinalcortocatastral" style='text-indent: 0.5em'>
         {{ $licencias->numerofinca }}                       {{ $licencias->numerofolio }}                    {{ $licencias->libro }}     
    </pre >
    <pre id="espacio">
    </pre>
    <pre id="partecatastral1" style='text-indent: 0.5em'>
        {{ $licencias->codigoinmueble }}                              {{ $licencias->solvenciamunicipal }}
    </pre>
    <pre id="partecatastral2" style='text-indent: 0.5em'>
        {{ $licencias->monto }}
    </pre>

@endforeach
<!--ultima parte-->

</body>

</html> 