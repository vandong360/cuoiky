<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class BookFormRequest extends FormRequest
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
            'tenKH' => 'required|min:5',
            'sdt' => 'required|numeric|min:6',
            'note' => 'max:100'        
        ];
    }

    public function messages()
    {
        return [
            'tenKH.required' => 'Vui lòng nhập',
            'sdt.required' => 'Vui lòng nhập',
            'tenKH.min' => 'Vui lòng nhập đầy đủ tên',
            'sdt.min' => 'Vui lòng nhập số điện thoại đầy đủ ',
            'sdt.numeric' => 'Số điện thoại phải là số',
            'note.max' => 'Ghi chú quá dài!'
        ];
    }
}
