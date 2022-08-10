<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentDataRequest extends FormRequest
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
            'fatherName' => 'required',
            'fatherDob' => 'required',
            'fatherAddress' => 'required',
            'fatherEducation' => 'required',
            'fatherJob' => 'required',
            'fatherStatus' => 'required',
            'motherName' => 'required',
            'motherDob' => 'required',
            'motherAddress' => 'required',
            'motherEducation' => 'required',
            'motherJob' => 'required',
            'motherStatus' => 'required',
        ];
    }
}
