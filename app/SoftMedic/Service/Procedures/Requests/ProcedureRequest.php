<?php

namespace App\SoftMedic\Service\Procedures\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcedureRequest extends FormRequest
{
    public function rules() {
        return [
            'descripcion'    => 'required|max:250',
            'codigo_interno' => 'required|max:20',
            'tipo'           => 'nullable',
            'tiempo'         => getValidateQuantity(),
            'precio'         => getValidateAmount(),
            'idEspecialidad' => 'required',
            'idMotivoCita'   => 'required',
            'status'         => 'nullable'
        ];
    }
    public function messages()
    {
        return [
            'descripcion.required' => "Nombre es obligatorio",
        ];
    }
}
