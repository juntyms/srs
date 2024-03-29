<?php

namespace App\Http\Requests;

use Alert;
use Illuminate\Foundation\Http\FormRequest;

class ayUpdateRequest extends FormRequest
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
            'name'=>['required','unique:ays']
        ];
    }

    public function messages()
    {
        return ['name.required'=>'Academic Year can not be blank',
                'name.unique'=>'Academic Year already exists'];
    }
}
