<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title></title>
   <style type="text/css">
        p{
            line-height: 70%;
        }

        #num_licencia{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 402;
            top: 96;
            position: fixed;
        }

        #num_expediente{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 402;
            top: 116;
            position: fixed;
        }

        #fecha{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 402;
            top: 136;
            position: fixed;
        }

        #nombre_propietario{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 138;
            top: 155.5;
            position: fixed;
        }

        #direccion{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 84;
            top: 175;
            position: fixed;
        }

        #tipo_tierra{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 237.5;
            top: 249.5;
            position: fixed;
        }

        #tipo_empedrado{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 237.5;
            top: 272;
            position: fixed;
        }

        #tipo_adoquin{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 237.5;
            top: 294.5;
            position: fixed;
        }

        #tipo_asfalto{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 237.5;
            top: 317;
            position: fixed;
        }

        #tipo_pavimento{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 237.5;
            top: 339.5;
            position: fixed;
        }

        #longitud{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 346;
            top: 249.5;
            position: fixed;
        }

        #ancho{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 346;
            top: 272;
            position: fixed;
        }

        #profundidad{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 346;
            top: 294;
            position: fixed;
        }

        #diam_tubo_conexion{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 433;
            top: 317;
            position: fixed;
        }

        #diam_colector{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 433;
            top: 339;
            position: fixed;
        }

        #ejecutor_obra{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 144;
            top: 375;
            position: fixed;
        }

        #direccion_ejecutor{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 132;
            top: 410.5;
            position: fixed;
        }

        #recibo{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 288;
            top: 452;
            position: fixed;
        }

        #descripcion{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 216;
            top: 508;
            position: fixed;
        }

        #derecho{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 87;
            top: 540;
            position: fixed;
        }

        #remosion{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 332;
            top: 540;
            position: fixed;
        }

        #numero_finca{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 65;
            top: 567;
            position: fixed;
        }

        #numero_folio{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 245;
            top: 567;
            position: fixed;
        }

        #libro{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 404;
            top: 567;
            position: fixed;
        }

        #numero_catastral{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 58;
            top: 597.5;
            position: fixed;
        }

        #solvencia{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 310;
            top: 597.5;
            position: fixed;
        }

        #solvencia{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 310;
            top: 597.5;
            position: fixed;
        }

        #fecha_conexion{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 58.5;
            top: 630;
            position: fixed;
        }
        
   </style>
</head>
<body>
 <!--<div >
        <div style="background-position: center; position: fixed;  text-align: center; z-index: -1000; ">
        <img src="/images/licencia.jpg" style="width: 21.59cm; height: 27.94cm;">
        </div>
</div>-->

<!-- <p id="espacio2">
    hola
</p>
<p id="espacio2" >
    hola
</p> -->

<!-- /////////////////////////////////////////////////////////////////// -->
    @foreach($licencia as $licencias)
        <label id="num_licencia">
            {{ $licencias->numerolicencia }}
        </label>

        <label id="num_expediente">
            {{ $licencias->expediente }}
        </label>

        <label id="fecha">
            {{ $licencias->fechaautorizacion }}
        </label>
    @endforeach


    @foreach($datos as $dato)
        <label id="nombre_propietario">
            {{ $dato->nombre_persona }} {{ $dato->apellido }}
        </label>
    @endforeach


    @foreach($licencia as $licencias)
        <label id="direccion">
            {{ $licencias->direccionobra }}
        </label>

        <!-- tipos de vias -->
        <label id="tipo_tierra">
            @if($licencias->tipovia_id == 1)
                X
            @endif
        </label>

        <label id="tipo_empedrado">
            @if($licencias->tipovia_id == 2)
                X
            @endif
        </label>

        <label id="tipo_adoquin">
            @if($licencias->tipovia_id == 3)
                X
            @endif
        </label>

        <label id="tipo_asfalto">
            @if($licencias->tipovia_id == 4)
                X
            @endif
        </label>

        <label id="tipo_pavimento">
            @if($licencias->tipovia_id == 5)
                X
            @endif
        </label>
        <!-- fin tipos de vías -->

        <label id="longitud">
            {{ $licencias->longitud }} Metros
        </label>

        <label id="ancho">
            {{ $licencias->ancho }} Metros
        </label>

        <label id="profundidad">
            {{ $licencias->profundidad }}
        </label>

        <label id="diam_tubo_conexion">
            {{ $licencias->diametrotubo }} "PVC
        </label>

        <label id="diam_colector">
            {{ $licencias->diametrocolector }} "TC
        </label>
    @endforeach

    @foreach($datos as $dato)
        <label id="ejecutor_obra">
            {{ $dato->nombre_ejecutor }}
        </label>

        <label id="direccion_ejecutor">
            {{ $dato->direccion_ejecutor}}
        </label>
    @endforeach

    @foreach($licencia as $licencias)
        <label id="recibo">
            Recibo de tesorería No.{{ $licencias->recibo }}
        </label>

        <label id="descripcion">
            {{ $licencias->descripcion }}
        </label>

        <label id="derecho">
            Q.{{ $licencias->derecho }}
        </label>

        <label id="remosion">
            {{ $licencias->remocion }}
        </label>

        <label id="numero_finca">
            {{ $licencias->numerofinca }}
        </label>

        <label id="numero_finca">
            {{ $licencias->numerofinca }}
        </label>

        <label id="numero_folio">
            {{ $licencias->numerofolio }}
        </label>

        <label id="libro">
            {{ $licencias->libro }}
        </label>

        <label id="numero_catastral">
            {{ $licencias->codigoinmueble }}
        </label>

        <label id="solvencia">
            {{ $licencias->solvenciamunicipal }}
        </label>

        <label id="fecha_conexion">
            {{ $licencias->monto }}
        </label>
    @endforeach


<!-- /////////////////////////////////////////////////////////////////// -->

</body>

</html> 