<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class typeRequest extends FormRequest
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
            'name'=>['required','unique:software_types','min:5']
        ];
    }
    public function messages()
    {
        return ['name.required'=>'Software Type can not be blank',
                'name.unique'=>'Software Type already exists',
                'name.min'=>'Software Type must be at least 5 characters'];
    }
}
