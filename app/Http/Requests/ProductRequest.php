<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'state' => 'required|string',
            'image' => 'image|max:2048',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nombre',
            'price' => 'precio'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Se requiere el campo nombre',
            'price.numeric' => 'Ingresa un numero'
        ];
    }
}
