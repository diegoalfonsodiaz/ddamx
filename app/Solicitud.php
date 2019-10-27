<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Arr;

class Solicitud extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    protected $fillable = ['persona_id', 
                            'direccionobra', 
                            'codigoinmueble', 
                            'expediente', 
                            'expedienteinterno', 
                            'fechasolicitud', 
                            'numerofinca', 
                            'numerofolio', 
                            'libro', 
                            'catastral', 
                            'solvenciamunicipal', 
                            'observacion', 
                            'longitud', 
                            'ancho', 
                            'profundidad', 
                            'diametrotubo', 
                            'diametrocolector', 
                            'ejecutor_id', 
                            'estadofactibilidad_id', 
                            'tipoobra_id'];



                            public function transformAudit(array $data): array
                            {
                                if (Arr::has($data, 'new_values.persona_id') ) {
                                    $data['old_values']['persona_id'] = Persona::find($this->getOriginal('persona_id'))->nombre;
                                    $data['new_values']['persona_id'] = Persona::find($this->getAttribute('persona_id'))->nombre;
                                   
                                }
                                elseif (Arr::has($data, 'new_values.ejecutor_id') ) {
                                    $data['old_values']['ejecutor_id'] = Ejecutor::find($this->getOriginal('ejecutor_id'))->nombre;
                                    $data['new_values']['ejecutor_id'] = Ejecutor::find($this->getAttribute('ejecutor_id'))->nombre;
                                   
                                }  

                                elseif (Arr::has($data, 'new_values.tipoobra_id') ) {
                                    $data['old_values']['tipoobra_id'] = Tipoobra::find($this->getOriginal('tipoobra_id'))->nombre;
                                    $data['new_values']['tipoobra_id'] = Tipoobra::find($this->getAttribute('tipoobra_id'))->nombre;
                                   
                                }  
                                elseif (Arr::has($data, 'new_values.estadofactibilidad_id') ) {
                                    $data['old_values']['estadofactibilidad_id'] = Estadofactibilidad::find($this->getOriginal('estadofactibilidad_id'))->nombre;
                                    $data['new_values']['estadofactibilidad_id'] = Estadofactibilidad::find($this->getAttribute('estadofactibilidad_id'))->nombre;
                                   
                                }  
                                return $data;
                                
                            }

                        
                            
}
