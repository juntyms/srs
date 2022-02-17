<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vendorRequest extends FormRequest
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
            'name'=>['required','unique:software_vendors','min:5']
        ];
    }
    public function messages()
    {
        return ['name.required'=>'Vendor name can not be blank',
                'name.unique'=>'Vendor name already exists',
                'name.min'=>'Vendor name must be at least 5 characters'];
    }
}
