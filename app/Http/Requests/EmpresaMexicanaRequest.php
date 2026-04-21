<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaMexicanaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_empresa' => 'required|string|max:100',
            'rfc' => 'required|string|max:13',
            'sector' => 'nullable|string|max:50',
            'direccion' => 'nullable|string|max:150',
            'telefono' => 'nullable|string|max:15',
        ];
    }
}