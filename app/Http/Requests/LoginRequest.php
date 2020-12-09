<?php

namespace App\Http\Requests;

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
            'email'=>'required|email|unique:users',
            'name'=>'required',
            'password' => 'required|confirmed',

        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'لم يتم إدخال  الأسم!!',
            'email.required' => 'لم يتم إدخال البريد الإلكتروني!',
            'email.unique' => 'هذا الايميل مستخدم مسبقا',
            'password.required'=>'لم يتم إدخال كلمة مرور ',
            'password.min'=>'يجب أن تتكون كلمة المرور من 8 أحرف على الأقل. ',
            'password.confirmed'=>'تأكيد كلمة المرور غير متطابق. ',
            
        ];
    }
}
