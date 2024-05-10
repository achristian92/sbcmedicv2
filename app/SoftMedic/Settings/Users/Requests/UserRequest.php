<?php

namespace App\SoftMedic\Settings\Users\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        //dd($this->segment(3));

        $rules = [
            'firstname'     => 'required',
            'lastname'      => 'required',

            'idTypeDocument' => 'required',
            'document' => ['required','unique:users,username'],

            'email' => 'nullable',
            'phone' => 'nullable',
            'birthdate' => 'nullable',

            'idRol' => 'required',

            'sex' => 'required',

            'idDistrict'   => 'required',
            'address'       => 'nullable',

            'status' => 'nullable'
        ];

        if ($this->method() === 'PUT' ) {
            $rules['document'] =  'required|unique:users,username,' .$this->segment(3).',idUser';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'firstname' => 'Nombres',
            'lastname' => 'Apellidos',
            'idTypeDocument' => 'Tipo de documento',
            'idDistrict' => 'Distrito',
            'document' => 'Nro. documento'
        ];
    }
    public function authorize(): bool
    {
        return true;
    }
}
