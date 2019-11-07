<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <style type="text/css">
        p{
            line-height: 70%;
        }
        #expediente{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 406;
            top: 67;
            position: fixed;
        }
        #fecha{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 0;
            top: 148;
            position: fixed;
        }
        #ppropietario{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 72;
            top: 168;
            position: fixed;
        }
        #pdireccion{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 72;
            top: 185;
            position: fixed;
        }
        #pdireccionobra{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 120;
            top: 202;
            position: fixed;
        }
        #pejecutor{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 72;
            top: 245;
            position: fixed;
        }
        #pdirejecutor{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 72;
            top: 263;
            position: fixed;
        }
        #pfinca{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 90;
            top: 298;
            position: fixed;
        }
        #pfolio{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 275;
            top: 298;
            position: fixed;
        }
        #plibro{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 462;
            top: 298;
            position: fixed;
        }
        #pcatastral{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 170;
            top: 316;
            position: fixed;
        }
        #psolvencia{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 462;
            top: 316;
            position: fixed;
        }
        #observacion{
            line-height: 175%;
        }
        #ornatoper{
            background: #fff;
            color: black;
            height: 10px;
            
            width: 100%;
            left: 0;
            top: 805;
            position: fixed;
        }
        #ornatoejec{
            background: #fff;
            color: black;
            height: 10px;
            
            width: 100%;
            left: 0;
            top: 834;
            position: fixed;
        }
        #pcargo1{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 322;
            top: 248;
            position: fixed;
        }
        #pcargo2{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 390;
            top: 248;
            position: fixed;
        }
        #pcargo3{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 470;
            top: 248;
            position: fixed;
        }
        #ptipoid2{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 90;
            top: 408;
            position: fixed;
        }
        #ptipoid3{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 85;
            top: 422;
            position: fixed;
        }
        #ptipoid4{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 100;
            top: 436;
            position: fixed;
        }
        #ptipoid5{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 105;
            top: 451;
            position: fixed;
        }
        #ptipoid6{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 103;
            top: 465;
            position: fixed;
        }
        #ptipoid7{
            background: #fff;
            color: black;
            height: 1px;
            
            width: 100%;
            left: 90;
            top: 479;
            position: fixed;
        }
         
        #espacio{
            line-height: 20%;
        }
        h4{
        font-weight: normal;
        }
}
        
   </style>

</head>
<body>
<pre id="espacio">
</pre>
@foreach($solicitud as $solicitudes)
    
    <label id="expediente">
        {{ $solicitudes->expediente }}
    </label>


    @endforeach
    <br><br><br>
    
    <label id="fecha">
    <?php
    $dias = date("d", $fechaEntera);
    $anio = date("Y", $fechaEntera);
    $mes = date("m", $fechaEntera);
    echo str_repeat ("&nbsp;", 97);  echo $dias; 
    echo "      ";echo "      ";
    echo str_repeat ("&nbsp;", 27);
    if ($mes = '1') {
        echo "Enero";
    } elseif ($mes = '2') {
        echo "Febrero";
    }elseif ($mes = '3') {
        echo "Marzo";
    }elseif ($mes = '4') {
        echo "Abril";
    }elseif ($mes = '5') {
        echo "Mayo";
    }elseif ($mes = '6') {
        echo "Junio";
    }elseif ($mes = '7') {
        echo "Julio";
    }elseif ($mes = '8') {
        echo "Agosto";
    }elseif ($mes = '9') {
        echo "Septiembre";
    }elseif ($mes = '10') {
        echo "Octubre";
    }elseif ($mes = '11') {
        echo "Noviembre";
    }elseif ($mes = '12') {
        echo "Diciembre";
    } 
    echo "      ";echo "      ";
    $anios = substr("$anio", -2); 
    echo str_repeat ("&nbsp;", 30); echo "$anios";
    ?>
    </label>

   
    @foreach($solicitud as $solicitudes)
        <label id="ppropietario">
            {{ $solicitudes->nombre_persona }}  {{ $solicitudes->apellido }}
        </label>

        <label id="pdireccion">
            {{ $solicitudes->direccion }}
        </label>

        <label id="pdireccionobra">
            {{ $solicitudes->direccionobra }}
        </label>

        <label id="pdireccionobra">
            {{ $solicitudes->direccionobra }}
        </label>

        <label id="pejecutor">
            {{ $solicitudes->nombre_ejecutor }}
            <label id="pcargo1">
                @if($solicitudes->cargo == 1)
                    X
                @endif
            </label>

            <label id="pcargo2">
                @if($solicitudes->cargo == 2)
                    X
                @endif
            </label>

            <label id="pcargo3">
                @if($solicitudes->cargo == 3)
                    X
                @endif
            </label>
        </label>

        <label id="pdirejecutor">
            {{ $solicitudes->direccionejecutor }}
        </label>

        <label id="pfinca">
            {{ $solicitudes->numerofinca }}
        </label>

        <label id="pfolio">
            {{ $solicitudes->numerofolio }}
        </label>

        <label id="plibro">
            {{ $solicitudes->libro }}
        </label>

        <label id="pcatastral">
            {{ $solicitudes->codigoinmueble }}
        </label>

        <label id="psolvencia">
            {{ $solicitudes->solvenciamunicipal }}
        </label>

        <label id="ptipoid2">
            @if($solicitudes->tipo == 2)
                X
            @endif
        </label>
        <label id="ptipoid3">
            @if($solicitudes->tipo == 3)
                X
            @endif
        </label>
        <label id="ptipoid4">
            @if($solicitudes->tipo == 4)
                X
            @endif
        </label>
        <label id="ptipoid5">
            @if($solicitudes->tipo == 5)
                X
            @endif
        </label>
        <label id="ptipoid6">
            @if($solicitudes->tipo == 6)
                X
            @endif
        </label>
        <label id="ptipoid7">
            @if($solicitudes->tipo >= 7)
                X
            @endif
        </label>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br>
        <p id="observacion" style='text-indent: 7em'>
            {{ $solicitudes->observacion }}
        </p>
    @endforeach


    @foreach($solicitud as $solicitudes)
    <br><br><br><br><br><br><br>
        <p id="ornatoper" style='text-indent: 34em'>
            {{ $solicitudes->ornato_persona }}
        </p>
 
        <p id="ornatoejec" style='text-indent: 34em'>
            {{ $solicitudes->eornato }}
        </p>
    @endforeach
</body>

</html>