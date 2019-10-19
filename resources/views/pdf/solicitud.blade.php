<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <div style="background-position: center; position: fixed;  text-align: center; z-index: -1000; ">
        <img src="https://scontent.fgua3-2.fna.fbcdn.net/v/t1.0-9/72218390_2479778338804564_8816007235076358144_n.jpg?_nc_cat=107&_nc_oc=AQmI6AW1zEjolcLL36OdDy8GJmezDfEAdZ6Er6XMhF2Pm_RXos4b2Mfa-JVkpMmr6Qg&_nc_ht=scontent.fgua3-2.fna&oh=94d620e0718fa26e1d4f2032d409ec7e&oe=5E20EF23" style="width: 110%; height: 110%;">
    </div>
</head>
<body>
@foreach($solicitud as $solicitudes)
    
    <br><br><br><br><br>
    <?php
        echo str_repeat ("&nbsp;", 135);
    ?>
    {{ $solicitudes->expediente }} <br>
    
   
    @endforeach
<br><br><br><br><br>
<?php
    $dias = date("d", $fechaEntera);
    $anio = date("Y", $fechaEntera);
    $mes = date("m", $fechaEntera);
    echo str_repeat ("&nbsp;", 100);  echo $dias; 
    echo "      ";echo "      ";
    echo str_repeat ("&nbsp;", 30);
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
    echo str_repeat ("&nbsp;", 25); echo "$anios";
?>

@foreach($solicitud as $solicitudes)

    <br><br>
    <?php
        echo str_repeat ("&nbsp;", 30);
    ?>
    {{ $solicitudes->nombre_persona }}

    <br><br>
    <?php
        echo str_repeat ("&nbsp;", 30);
    ?>
    {{ $solicitudes->direccionobra }}
    
    <br>
    <?php
        echo str_repeat ("&nbsp;", 75);
    ?>
    {{ $solicitudes->direccionobra }}
    
    <br><br><br>
    <?php
        echo str_repeat ("&nbsp;", 30);
    ?>
    {{ $solicitudes->nombre_ejecutor }}
    
    <br>
    <?php
        echo str_repeat ("&nbsp;", 30);
    ?>
    {{ $solicitudes->direccionejecutor }}

    <br><br><br>
    <?php
        echo str_repeat ("&nbsp;", 28);
    ?>
    {{ $solicitudes->numerofinca }}

    <?php
        echo str_repeat ("&nbsp;", 40);
    ?>
    {{ $solicitudes->numerofolio }}

    <?php
        echo str_repeat ("&nbsp;", 38);
    ?>
    {{ $solicitudes->libro }}
    
    <br>
    <?php
        echo str_repeat ("&nbsp;", 28);
    ?>
    {{ $solicitudes->catastral }}

    <?php
        echo str_repeat ("&nbsp;", 110);
    ?>
    {{ $solicitudes->solvenciamunicipal }}<br><br>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
        echo str_repeat ("&nbsp;", 28);
    ?>
    {{ $solicitudes->observacion }}

    
   
    @endforeach
</body>
</html>