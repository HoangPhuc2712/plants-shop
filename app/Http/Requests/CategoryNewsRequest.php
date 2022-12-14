<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryNewsRequest extends FormRequest
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
            'name' => ['required', 'max:191'],
            'sort' => ['required', 'numeric'],
        ];
    }

    public function messages()
    {   
        return [
            'name.required' => 'Tên danh mục không được để trống.',
            'name.max'      => 'Không được vượt quá 191 ký tự',
            'sort.required' => 'Nhập vào thứ tự hiển thị .',
            'sort.numeric'  => 'Định dạng phải thuộc kiểu số .',
            
        ];

    }
}
