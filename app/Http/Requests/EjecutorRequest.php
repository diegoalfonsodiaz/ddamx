<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EjecutorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|max:191',
            'direccion'=>'required|max:191',
            'ornato'=>'required|max:50',
            'cargoejecutor_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El Nombre del cargo es requerido',
            'nombre.max' => 'La cadena de texto debe de ser menor a 191 caracteres',
            'direccion.max' => 'La cadena de texto debe de ser menor a 191 caracteres',
            'ornato.max' => 'El ornato debe de ser menor a 191 caracteres',

            'ornato.required' => 'Ornato  requerido',
            'cargoejecutor_id.required' => 'Cargo del ejecutor es requerido',

            'direccion.required' => 'La direccion del ejecutor es requerida',
            'direccion.max' => 'La cadena de texto de la dirección debe de ser menor a 191 caracteres',

        ];
    }
    
}
