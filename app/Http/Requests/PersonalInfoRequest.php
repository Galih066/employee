<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'address' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'dob' => 'required|date',
            'pob' => 'required',
            'postal_code' => 'required|numeric',
            'provinces' => 'required',
            'city' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'ethnic' => 'required',
        ];
    }
}
