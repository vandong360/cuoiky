<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class BlogFormRequest extends FormRequest
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
            'title' => 'required|min:10',
            'content' => 'required|min:20',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:4096'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập',
            'contend.required' => 'Vui lòng nhập',
            'title.min' => 'Vui lòng nhập hơn 10 kí tự',
            'content.min' => 'Vui lòng nhập hơn 20 kí tự',
            'img.image' => 'Chỉ được chọn file ảnh',
            'img.mimes' => 'Đuôi file phải là: jpeg, png, jpg, gif',
            'img.max' => 'Kích thước ảnh không vượt quá 4Mb'
        ];
    }
}
