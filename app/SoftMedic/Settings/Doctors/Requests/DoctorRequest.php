<?php

namespace App\SoftMedic\Settings\Doctors\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'         => 'required',
            'firstname'     => 'required',
            'lastname'      => 'required',

            'document_type_id' => 'required',
            'nro_document' => 'nullable',

            'email' => 'nullable',
            'phone' => 'required',
            'gender' => 'required',
            'birthdate' => 'nullable',

            'cmp'           => 'nullable',
            'rne'           => 'nullable',
            'cnp'           => 'nullable',
            'cpp'           => 'nullable',
            'idSpecialty'   => 'required',
            'codigoSala'    => 'nullable',

            'district_id'   => 'required',
            'address'       => 'nullable',

            'status' => 'nullable'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
