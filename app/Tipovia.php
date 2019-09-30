<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Tipovia

class Tipovia extends Model
{
    protected $fillable = ['nombre','descripcion','estado'];
}
