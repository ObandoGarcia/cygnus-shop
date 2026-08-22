<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateImageRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'filename.required' => 'El nombre la imagen es obligatorio',
            'filename.unique' => 'El nombre de l imagen debe ser unico',
            'url.required' => 'La url de la imagen es obligatoria',
            'url.url' => 'La url debe tener formato valido'
        ];
    }

    public function rules(): array
    {
        return [
            'filename' => ['required', 'unique:images,filename'],
            'url' => ['required', 'url']
        ];
    }
}
