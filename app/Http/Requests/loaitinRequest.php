<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loaitinRequest extends FormRequest
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
            'tenlt'=>'required|min:5|unique:loaitin,tenlt|max:100'
        ];
    }

    public function messages()
    {
        return [
            'tenlt.required'=>'Bạn ơi chưa nhập tên mà',
            'tenlt.min'=>'Tên loại tin bạn nhập quá ngắn',
            'tenlt.unique'=>'Tên loại tin bạn nhập bị trùng',
            'tenlt.max'=>'Tên loại tin bạn nhập quá dài'
        ];
    }
}
