<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudDpiRequest extends FormRequest
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
            'dpi'=>'required|numeric|digits_between:13,13',
            'g-recaptcha-response' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'dpi.required' => '¡AVISO!: No ha ingresado su DPI',
            'dpi.numeric' => '¡AVISO!: Ingrese su DPI correctamente',
            'dpi.digits_between' => '¡AVISO!: Ingrese su DPI correctamente',
            'g-recaptcha-response.required' => '¡AVISO!: Es necesario completar el reCAPTCHA'
        ];
    }
}
