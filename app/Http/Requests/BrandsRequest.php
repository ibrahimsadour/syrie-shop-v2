<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandsRequest extends FormRequest
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
            //photo => required => altijd verplicht 
            //photo => required_without:id => altijd verplicht behalf als de form bevat id  <input name="id" value="{{$mainCategory -> id}}" type="hidden"> bij update
 
            'photo' => 'required_without:id|mimes:jpg,jpeg,png',
            'brand' => 'required|array|min:1',
            'brand.*.name' => 'required',
            'brand.*.abbr' => 'required',
            //'brand.*.active' => 'required',
        ];
    }


}
