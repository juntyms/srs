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
                'username'=>['required','unique:users','min:5'],
                'password'=>['required','min:5'],
                'email'=>'required',
                'fullname'=>['required','min:5']
        ];
    }
    public function messages()
    {
        return ['username.required'=>'Username can not be blank',
                'username.unique'=>'Username already exists',
                'username.min'=>'Username must be at least 5 characters',

                'password.required'=>'Password can not be blank',
                'password.min'=>'Password must be at least 5 characters',

                'email.required'=>'Email Address can not be blank',

                'fullname.required'=>'User Full name can not be blank',
                'fullname.min'=>'User Full name must be at least 5 characters'
                ];
    }
}
