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
                    'software_type_id'=>'required','company_id'=>'required','purchase_date'=>'required','expiry_date'=>'required',
                    'warranty_end_date'=>'required','license_id'=>'required','installer_is_available'=>'required',
                    'custodian_name'=>['required']
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
                'purchase_date.required'=>'Purchase date can not be blank',
                'expiry_date.required'=>'Expiry Date can not be blank',
                'warranty_end_date.required'=>'Warranty End Date can not be blank',
                'license_id.required'=>'License name can not be blank',
                'installer_is_available.required'=>'Please choose if installer available or not',
                'custodian_name.required'=>'Custodian name can not be blank',
                ];
    }
}
