<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrarUsuarioRequest extends FormRequest
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
            'name' => 'required|string|max:60',
            'email' => 'required|email|unique',
            'password_register' => 'required|password|max:20|min:8|confirmed',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Introduce tu nombre',
            'email.required'  => 'Introduce tu email',
            'password_register.required' => 'Introduce tu contraseña',
            'password_confirmation.required' => 'Introduce tu contraseña otra vez'
        ];
    }
}
