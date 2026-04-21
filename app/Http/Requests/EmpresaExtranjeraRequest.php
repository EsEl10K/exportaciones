<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaExtranjeraRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_empresa' => 'required|string|max:100',
            'pais' => 'nullable|string|max:50',
            'ciudad' => 'nullable|string|max:50',
            'contacto' => 'nullable|string|max:100',
        ];
    }
}