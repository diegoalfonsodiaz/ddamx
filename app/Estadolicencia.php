<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadolicencia extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'estado'
    ];
}
