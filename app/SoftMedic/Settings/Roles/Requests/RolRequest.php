<?php

namespace App\SoftMedic\Settings\Roles\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'descripcion' => 'required',
            'permissions' => ['nullable','array']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
