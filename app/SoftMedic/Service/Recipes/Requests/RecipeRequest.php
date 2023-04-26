<?php

namespace App\SoftMedic\Service\Recipes\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'descripcion'    => 'required',
            'presentacion'   => 'required',
            'cod_susi'       => 'required',
            'costo_unitario' => 'nullable|numeric',
            'precio_compra'  => 'nullable|numeric',
            'activo'         => 'nullable'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
