<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class licenseRequest extends FormRequest
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
            'name'=>['required','unique:licenses','min:5']
        ];
    }

    public function messages()
    {
        return ['name.required'=>'License name can not be blank',
                'name.unique'=>'License name already exists',
                'name.min'=>'License name must be at least 5 characters'];
    }
}
