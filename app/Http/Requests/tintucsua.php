<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tintucsua extends FormRequest
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
            'tieude'=>'required|min:5|max:100|',
            'theloai'=>'numeric',
            'loaitin'=>'numeric'
        ];
    }

    public function messages()
    {
        return [
            'tieude.required'=>'Bạn ơi chưa nhập tên mà',
            'tieude.min'=>'Tên tiêu đề bạn nhập quá ngắn',
            'tieude.max'=>'Tên tiêu đề bạn nhập quá dài',
            'loaitin.numeric'=>'Bạn ơi chưa chọn loại tin mà',
            'theloai.numeric'=>'Bạn ơi chưa chọn thể loại mà'
        ];
    }
}
