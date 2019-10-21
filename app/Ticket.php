<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'detalle', 'user_id','bitacora_id','fecha',
    ];
}
