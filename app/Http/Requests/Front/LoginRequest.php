<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'identify'=>['required', 'string', 'max:50'],
            'name'=>['required', 'string', 'max:255'],
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required|min:6'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [

            'name.required'=>'لم يتم إدخال البريد الأسم ',
            'email.required'=>'لم يتم إدخال البريد الإلكتروني ',
            'mobile.required'=>'لم يتم إدخال رقم الهاتف  ',
            'password.required'=>'لم يتم إدخال كلمة مرور ',
            
        ];
    }
}
