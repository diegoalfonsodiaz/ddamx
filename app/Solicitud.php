<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    
    protected $fillable = ['persona_id', 
                            'direccionobra', 
                            'codigoinmueble', 
                            'expediente', 
                            'expedienteinterno', 
                            'fechasolicitud', 
                            'numerofinca', 
                            'numerofolio', 
                            'libro', 
                            'catastral', 
                            'solvenciamunicipal', 
                            'observacion', 
                            'longitud', 
                            'ancho', 
                            'profundidad', 
                            'diametrotubo', 
                            'diametrocolector', 
                            'ejecutor_id', 
                            'estadofactibilidad_id', 
                            'tipoobra_id'];
}
