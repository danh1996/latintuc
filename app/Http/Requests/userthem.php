<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userthem extends FormRequest
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
            'hoten'=>'required',
            'email'=>'require|unique:users,email',
            'password'=>'required',
            'diachi'=>'required',
            'dienthoai'=>'required',
            'idgroup'=>'numeric'
        ];
    }

    public function messages()
    {
        return [
            'hoten.required'=>'Bạn ơi chưa nhập tên mà',
            'email.required'=>'Bạn ơi chưa nhập tên mà',
            'email.unique'=>'Email bạn nhập đã tồn tại bạn ơi',
            'diachi.required'=>'Bạn ơi chưa nhập địa chỉ mà',
            'dienthoai.required'=>'Bạn ơi chưa nhập điện thoại mà',
            'idgroup.numeric'=>'Bạn ơi chưa chọn loại user mà'
        ];
    }
}
