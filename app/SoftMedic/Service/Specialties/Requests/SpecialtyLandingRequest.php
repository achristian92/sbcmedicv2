<?php

namespace App\SoftMedic\Service\Specialties\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialtyLandingRequest extends FormRequest
{
    public function rules()
    {
        return [
            'web_description' => 'required',
            'web_is_active' => 'nullable',
            'attachment_icon' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg',
            'attachment_img' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Nombre es obligatorio",
            'web_description.required' => "Descripción es obligatorio",
            'attachment_icon.required' => 'Adjuntar icono',
            'attachment_img.required' => 'Adjuntar imagen',
        ];
    }
}
