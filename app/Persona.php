<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Persona extends Model 
{
    
    //
    //protected $primaryKey="dpi";
    protected $fillable = ['dpi','nombre','apellido','telefono','correo','estado','ornato'];
    //protected $guarded=[];
}
