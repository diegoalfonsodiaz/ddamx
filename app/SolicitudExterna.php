<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudExterna extends Model
{
    public function findByDpi($q){
        return $this->where('dpi', 'like',"$q%")
                    ->get();   
       }
    //
}
