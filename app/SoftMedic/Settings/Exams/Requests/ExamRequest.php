<?php

namespace App\SoftMedic\Settings\Exams\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nombre'            => 'required',
            'tipo'              => 'required',
            'codigo'            => 'nullable',
            'precio'            => 'nullable|numeric',
            'valor_referencial' => 'nullable',
            'unidades'          => 'nullable',
            'status'            => 'nullable',
            'nuevo'             => 'nullable',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
