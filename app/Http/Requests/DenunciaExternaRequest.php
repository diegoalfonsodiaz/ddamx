<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DenunciaExternaRequest extends FormRequest
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
            'descripcion' => 'required|max:191',
            'telefono' => 'required|numeric|digits_between:8,8',
            'g-recaptcha-response' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'descripcion.required' => '¡AVISO!: No ha llenado la "Descripción" de su denuncia',
            'descripcion.max' => '¡AVISO!: La "Descripción" de su denuncia debe ser menor a 191 caracteres',
            'telefono.required' => '!AVISO!: EL "Teléfono" de la persona denunciante es requerido',
            'telefono.numeric' => '¡AVISO!: Ingrese su "Teléfono" correctamente',
            'telefono.digits_between' => '¡AVISO!: Ingrese su "Teléfono" correctamente',
            'g-recaptcha-response.required' => '¡AVISO!: Es necesario completar el "reCAPTCHA"'
        ];
    }
}
