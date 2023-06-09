<?php

namespace App\SoftMedic\Settings\Doctors\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorLandingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'local_id' => 'required',
            'web_description' => 'required',
            'web_is_active' => 'nullable',
            'attachment_img' => 'nullable|image'
        ];
    }

    public function messages()
    {
        return [
            'web_description.required' => "Descripción es obligatorio",
            'local_id.required' => "Sede es obligatorio",
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
