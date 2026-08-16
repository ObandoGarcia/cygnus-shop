<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre de la categoría es obligatorio.',
            'name.min' => 'El nombre de la categoría debe tener al menos 3 caracteres.',
            'name.string' => 'El nombre de la categoría debe ser una cadena de texto.',
            'name.max' => 'El nombre de la categoría no puede tener más de 255 caracteres.',
            'description.required' => 'La descripción de la categoría es obligatoria.',
            'description.min' => 'La descripción de la categoría debe tener al menos 3 caracteres.',
            'description.string' => 'La descripción de la categoría debe ser una cadena de texto.',
            'description.max' => 'La descripción de la categoría no puede tener más de 255 caracteres.',
            'status.required' => 'El estado de la categoría es obligatorio.',
            'status.in' => 'El estado de la categoría debe ser "active" o "inactive".',
            'user_id.required' => 'El ID del usuario es obligatorio.'
        ];
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['required', 'string', 'min:3', 'max:255'],
            'status' => ['required', 'in:active,inactive']
        ];
    }
}
