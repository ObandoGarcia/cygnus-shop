<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre de la marca es obligatorio.',
            'name.min' => 'El nombre de la marca debe tener al menos 3 caracteres.',
            'name.string' => 'El nombre de la marca debe ser una cadena de texto.',
            'name.max' => 'El nombre de la marca no puede tener más de 255 caracteres.',
            'status.required' => 'El estado de la marca es obligatorio.',
            'status.in' => 'El estado de la marca debe ser "active" o "inactive".',
        ];
    }
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'status' => 'required|in:active,inactive',
        ];
    }
}
