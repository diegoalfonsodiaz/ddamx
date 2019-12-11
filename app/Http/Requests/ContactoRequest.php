<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
            'nombre' => 'required|max:191',
            'email' => 'required|max:191',
            'descripcion' => 'required|max:191',
            'g-recaptcha-response' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => '¡AVISO!: El "Nombre y Apellido" de la persona es requerido',
            'nombre.max' => '¡AVISO!: La cadena de texto debe de ser menor a 191 caracteres',
            'correo.required' => '¡AVISO!: El "Teléfono" de la persona es requerido',
            'correo.max' => 'La cadena de texto debe de ser menor a 191 caracteres',
            'descripcion.required' => '¡AVISO!: No ha llenado la "Descripción"',
            'descripcion.max' => '¡AVISO!: La "Descripción" debe ser menor a 191 caracteres',
            'g-recaptcha-response.required' => '¡AVISO!: Es necesario completar el "reCAPTCHA"'
        ];
    }
}
