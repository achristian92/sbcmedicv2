<?php

namespace App\SoftMedic\Settings\Doctors\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorLandingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'local_id' => 'required',
            'web_description' => 'nullable',
            'web_is_active' => 'nullable',
            'attachment_img' => 'nullable|image',
            'web_info' => 'required',
            'web_services' => 'required',
            'web_info_type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'web_description.required' => "Descripción es obligatorio",
            'web_info.required' => "Formación Academica es obligatorio",
            'web_services.required' => "Servicios es obligatorio",
            'local_id.required' => "Sede es obligatorio",
            'attachment_img.image' => "Solo se permite imagenes",
            'web_info_type.required' => "El tipo de información es obligatorio",
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
