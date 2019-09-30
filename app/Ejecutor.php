<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejecutor extends Model
{
    protected $fillable = ['nombre', 'direccion', 'ornato','cargoejecutor_id'];
}
