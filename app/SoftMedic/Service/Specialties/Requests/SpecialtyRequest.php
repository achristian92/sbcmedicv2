<?php

namespace App\SoftMedic\Service\Specialties\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialtyRequest extends FormRequest
{
    public function rules() {
        return [
            'name' => 'required',
            'codigoSala' => 'nullable|max:10',
            'status' => 'nullable'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Nombre es obligatorio",
        ];
    }
}
