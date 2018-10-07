<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loaitinsua extends FormRequest
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
            'tenlt'=>'required|min:5|max:100',
            'theloai'=>'numeric'
        ];
    }

    public function messages()
    {
        return [
            'tenlt.required'=>'Bạn ơi chưa nhập tên mà',
            'tenlt.min'=>'Tên loại tin bạn nhập quá ngắn',
            'tenlt.max'=>'Tên loại tin bạn nhập quá dài',
            'theloai.numeric'=>'Bạn ơi chưa chọn thể loại mà'
        ];
    }
}
