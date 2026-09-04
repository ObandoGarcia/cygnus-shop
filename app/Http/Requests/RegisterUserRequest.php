<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterUserRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'username.required' => 'El usuario es requerido',
            'username.string' => 'El usuario debe ser texto',
            'username.max' => 'El usuario no debe exceder los 50 caracteres',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email debe tener el formato correcto nombre@nombre.com',
            'email.unique' => 'Ya existe un usuario registrado con este email',
            'password.required' => 'La contraseña es obligatoria.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.max' => 'La contraseña no debe superar los 50 caracteres.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password_confirmation.required' => 'Debe confirmar la contraseña.',
        ];
    }

    public function attributes(): array
    {
        return [
            'username' => 'nombre de usuario',
            'email' => 'correo electrónico',
            'password' => 'contraseña',
            'password_confirmation' => 'confirmación de contraseña',
        ];
    }

    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => [
                'required',
                'confirmed',
                'max:50',
                Password::min(4)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ],
            'password_confirmation' => ['required']
        ];
    }
}
