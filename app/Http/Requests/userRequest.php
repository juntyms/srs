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
                'username'=>['required'],
                'email'=>'required',
                'fullname'=>['required'],
                'department_id'=>'required'
        ];
    }
    public function messages()
    {
        return ['username.required'=>'Username can not be blank',
                'email.required'=>'Email Address can not be blank',
                'fullname.required'=>'User Full name can not be blank',
                'department_id'=>'You have to choose department name'
                ];
    }
}
