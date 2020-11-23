<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'price' => 'required|integer',
            'description' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [

            'name.required'=>'لم يتم إدخال  عنوان الاعلان ',
            'price.required'=>'لم يتم إدخال سعر الاعلان  ',
            'price.integer'=>'يجب ان يكون السعر من ارقام  ',
            'description.required'=>'لم يتم إدخال الوصف الخاص بالاعلان  ',
            'category_id.required'=>'أختر القسم المناسب لاعلانك ',
            
        ];
    }
}
