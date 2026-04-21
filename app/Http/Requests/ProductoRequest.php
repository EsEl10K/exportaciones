<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_producto' => 'required|string|max:100',
            'categoria' => 'required|string|max:50',
            'tipo_producto' => 'required|string|max:50',
            'es_controlado' => 'required|boolean',
        ];
    }
}