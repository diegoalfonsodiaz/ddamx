<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitarCodigoRequest extends FormRequest
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
            'codigo'=>'required|numeric',
            'g-recaptcha-response' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'codigo.required' => '¡AVISO!: No ha ingresado su "Código de inmueble"',
            'dpi.numeric' => '¡AVISO!: Ingrese su "Código de inmueble" correctamente',
            'g-recaptcha-response.required' => '¡AVISO!: Es necesario completar el reCAPTCHA'
        ];
    }
}
