<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title></title>
</head>
<body>
@foreach($solicitud as $solicitudes)
    
    {{ $solicitudes->nombre_persona }} <br>
    {{ $solicitudes->direccionobra }}<br>
    {{ $solicitudes->direccionobra }}<br>
    {{ $solicitudes->nombre_ejecutor }}<br>
    {{ $solicitudes->direccionejecutor }}<br>
    {{ $solicitudes->numerofinca }}<br>
    {{ $solicitudes->numerofolio }}<br>
    {{ $solicitudes->libro }}<br>
    {{ $solicitudes->catastral }}<br>
    {{ $solicitudes->solvenciamunicipal }}<br>
    {{ $solicitudes->eornato }}<br>
    

   

    @endforeach
</body>
</html>