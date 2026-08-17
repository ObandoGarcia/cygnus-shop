<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del producto es obligatorio.',
            'description.required' => 'La descripción del producto es obligatoria.',
            'code.required' => 'El código del producto es obligatorio.',
            'code.unique' => 'El código del producto debe ser único.',
            'purchase_price.required' => 'El precio de compra es obligatorio.',
            'sale_price.required' => 'El precio de venta es obligatorio.',
            'stock.required' => 'La cantidad en stock es obligatoria.',
            'available_stock.required' => 'La cantidad disponible en stock es obligatoria.',
            'category_id.required' => 'La categoría es obligatoria.',
            'category_id.exists' => 'La categoría seleccionada no existe.',
            'brand_id.required' => 'La marca es obligatoria.',
            'brand_id.exists' => 'La marca seleccionada no existe.',
            'status.required' => 'El estado es obligatorio.',
            'status.in' => 'El estado seleccionado es inválido.'
        ];
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255', 'unique:products,code'],
            'purchase_price' => ['required', 'numeric'],
            'sale_price' => ['required', 'numeric'],
            'stock' => ['required', 'integer'],
            'available_stock' => ['required', 'integer'],
            'category_id' => ['required', 'exists:categories,id'],
            'brand_id' => ['required', 'exists:brands,id'],
            'status' => ['required', 'in:active,inactive,discontinued,out_of_stock']
        ];
    }
}
