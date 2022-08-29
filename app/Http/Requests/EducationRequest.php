<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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
            'jsName' => 'required',
            'jsStartYear' => 'required',
            'jsGraduateYear' => 'required',
            'jsCity' => 'required',
            'jhsName' => 'required',
            'jhsStartYear' => 'required',
            'jhsGraduateYear' => 'required',
            'jhsCity' => 'required',
            'shsName' => 'required',
            'shsStartYear' => 'required',
            'shsGraduateYear' => 'required',
            'shsCity' => 'required',
        ];
    }
}
