<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    protected $fillable = ['numerolicencia', 
                            'fechaautorizacion', 
                            'recibo', 
                            'monto', 
                            'derecho', 
                            'remocion', 
                            'fechaconexion', 
                            'estadolicencia_id', 
                            'solicitudfactibilidad_id', 
                            'tipovia_id'];
}
