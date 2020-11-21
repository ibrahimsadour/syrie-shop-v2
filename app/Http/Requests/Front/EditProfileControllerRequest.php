<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileControllerRequest extends FormRequest
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
            'name' => 'required',
            'mobile' => 'required',
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed'
        ];
    }

    public function messages()
    {
        return [
            
            'name.required'=>'الرجاء ادخال الاسم   ',
            'mobile.required'=>'الرجاء ادخال رقم الهاتف ',
            'required'=>'الرجاء ادخال كلمة المرور الحالية ',
            'min'=>'يجب أن تتكون كلمة المرور الجديدة من 6 أحرف على الأقل. ',
            'string'=>'يجب أن تتكون كلمة المرور الجديدة من 6 أحرف على الأقل. ',
            'confirmed'=>'تأكيد كلمة المرور الجديدة غير مطابق. '
        ];
    }
}
