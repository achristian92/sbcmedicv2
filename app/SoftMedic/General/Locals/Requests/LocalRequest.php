<?php

namespace App\SoftMedic\General\Locals\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocalRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'web_is_active' => 'nullable'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
