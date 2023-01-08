<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class softwareRequest extends FormRequest
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
        return [    'ay_id'=>'required','department_id'=>'required','name'=>['required'],'software_vendor_id'=>'required',
                    'software_type_id'=>'required','company_id'=>'required','license_id'=>'required'
        ];
    }

    public function messages()
    {
        return ['ay_id.required'=>'Academic Year can not be blank',
                'department_id.required'=>'Department name can not be blank',
                'name.required'=>'Software name can not be blank',
                'software_vendor_id.required'=>'Software Vendor can not be blank',
                'software_type_id.required'=>'Software Type can not be blank',
                'company_id.required'=>'Company name can not be blank',
                'license_id.required'=>'License name can not be blank',
                ];
    }
}
