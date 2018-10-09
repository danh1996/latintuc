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
            'username'=>'required|min:3|unique:users,username',
            'password'=>'required',
            'diachi'=>'required',
            'dienthoai'=>'required',
            'email'=>'required',
            'idgroup'=>'numeric'
        ];
    }

    public function messages()
    {
        return [
            'tenlt.required'=>'Bạn ơi chưa nhập tên mà',
            'username.required'=>'Bạn ơi chưa nhập tên mà',
            'username.min'=>'Tên Đăng nhập bạn nhập quá ngắn',
            'username.unique'=>'Tên Đăng nhập đã tồn tại bạn ơi',
            'tenlt.max'=>'Tên loại tin bạn nhập quá dài',
            'diachi.required'=>'Bạn ơi chưa nhập địa chỉ mà',
            'dienthoai.required'=>'Bạn ơi chưa nhập điện thoại mà',
            'email.required'=>'Bạn ơi chưa nhập email mà',
            'idgroup.numeric'=>'Bạn ơi chưa chọn loại user mà'
        ];
    }
}
