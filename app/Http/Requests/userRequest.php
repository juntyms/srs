<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
                'username'=>['required','min:2'],
                'email'=>'required',
                'fullname'=>['required','min:2'],
                'department_id'=>'required'
        ];
    }
    public function messages()
    {
        return ['username.required'=>'Username can not be blank',
                'username.min'=>'Username must be at least 2 characters',

                'password.required'=>'Password can not be blank',
                'password.min'=>'Password must be at least 2 characters',

                'email.required'=>'Email Address can not be blank',

                'fullname.required'=>'User Full name can not be blank',
                'fullname.min'=>'User Full name must be at least 5 characters',

                'department_id'=>'You have to choose department name'
                ];
    }
}
