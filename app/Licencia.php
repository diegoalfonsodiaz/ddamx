<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Arr;

class Licencia extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

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




                            public function transformAudit(array $data): array
                            {
                                if (Arr::has($data, 'new_values.tipovia_id') ) {
                                    $data['old_values']['tipovia_id'] = Tipovia::find($this->getOriginal('tipovia_id'))->nombre;
                                    $data['new_values']['tipovia_id'] = Tipovia::find($this->getAttribute('tipovia_id'))->nombre;
                                   
                                }
                                elseif (Arr::has($data, 'new_values.solicitudfactibilidad_id') ) {
                                    $data['old_values']['solicitudfactibilidad_id'] = Solicitud::find($this->getOriginal('solicitudfactibilidad_id'))->codigoinmueble;
                                    $data['new_values']['solicitudfactibilidad_id'] = Solicitud::find($this->getAttribute('solicitudfactibilidad_id'))->codigoinmueble;
                                   
                                }  

                                elseif (Arr::has($data, 'new_values.estadolicencia_id') ) {
                                    $data['old_values']['estadolicencia_id'] = Estadolicencia::find($this->getOriginal('estadolicencia_id'))->nombre;
                                    $data['new_values']['estadolicencia_id'] = Estadolicencia::find($this->getAttribute('estadolicencia_id'))->nombre;
                                   
                                }  
                                
                                return $data;
                                
                            }
}
