<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $fillable = ['fecha', 
                            'user_id', 
                            'licencia_id', 
                            'descripcion',
                            'direccion',
                            'asunto_id'];
}
