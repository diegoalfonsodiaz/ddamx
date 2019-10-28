<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $fillable = ['descripcion', 'fecha', 'foto','direccion','telefono', 'estadodenuncia_id'];
}
