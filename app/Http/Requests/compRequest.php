<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class compRequest extends FormRequest
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
            'name'=>['required'],
            'email'=>['required'],
            'contact_no'=>['required'],
            'address'=>['required'],
            'gsm'=>['required'],
            'contact_person'=>['required']
        ];
    }
    public function messages()
    {
        return ['name.required'=>'Company name can not be blank',

                'email.required'=>'Email Address can not be blank',

                'contact_no.required'=>'Contact Number can not be blank',

                'address.required'=>'Address can not be blank',

                'gsm.required'=>'GSM Number can not be blank',

                'contact_person.required'=>'Contact Person name can not be blank',
                ];
    }
}