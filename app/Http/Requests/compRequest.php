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
            'name'=>['required','min:5'],
            'email'=>['required','min:5'],
            'contact_no'=>['required','min:5'],
            'address'=>['required','min:5'],
            'gsm'=>['required','min:5'],
            'contact_person'=>['required','min:5']
        ];
    }
    public function messages()
    {
        return ['name.required'=>'Company name can not be blank',
                'name.min'=>'Company name must be at least 5 characters',

                'email.required'=>'Email Address can not be blank',
                'email.min'=>'Email Address must be at least 5 characters',

                'contact_no.required'=>'Contact Number can not be blank',
                'contact_no.min'=>'Contact Number must be at least 5 numbers',

                'address.required'=>'Address can not be blank',
                'address.min'=>'Address must be at least 5 characters',

                'gsm.required'=>'GSM Number can not be blank',
                'gsm.min'=>'GSM Number must be at least 5 numbers',

                'contact_person.required'=>'Contact Person name can not be blank',
                'contact_person.min'=>'Contact Person name must be at least 5 characters',
                ];
    }
}