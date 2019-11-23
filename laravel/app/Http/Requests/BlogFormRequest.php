<?php

namespace App\Http\Requests;

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
        return false;
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
            'content' => 'required|min:30',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập',
            'contend.required' => 'Vui lòng nhập',
            'title.min' => 'Vui lòng nhập hơn 10 kí tự',
            'content.min' => 'Vui lòng nhập hơn 30 kí tự',
        ];
    }
}
