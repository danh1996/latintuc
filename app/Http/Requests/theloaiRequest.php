<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class theloaiRequest extends FormRequest
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
            'tentl'=>'required|min:5|unique:theloai,tentl|max:100'
        ];
    }

    public function messages()
    {
        return [
            'tentl.required'=>'Bạn ơi chưa nhập tên mà',
            'tentl.min'=>'Tên thể loại bạn nhập quá ngắn',
            'tentl.unique'=>'Tên thể loại bạn nhập bị trùng',
            'tentl.max'=>'Tên thể loại bạn nhập quá dài'
        ];
    }
}
