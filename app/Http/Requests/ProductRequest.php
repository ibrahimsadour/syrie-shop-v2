<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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

            'categories' => 'array|min:1', //[]
            'categories.*' => 'numeric|exists:categories,id',
            'tags' => 'nullable',
            'brand_id' => 'required|exists:brands,id',
            'photo' => 'required_without:id|mimes:jpg,jpeg,png',
            'product' => 'required|array|min:1',
            'slug' => 'required|unique:products,slug,'.$this -> id,
            'price' => 'required|max:10',
            'description' => 'required|max:1000',
            'name'=> 'required|max:100',
            'product.*.abbr' => 'required',

        ];
    }

}
