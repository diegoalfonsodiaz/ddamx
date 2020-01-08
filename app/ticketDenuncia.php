<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticketDenuncia extends Model
{
    protected $fillable = [
        'detalle', 'user','denuncia_id','fecha','fotografia'
    ];
}
