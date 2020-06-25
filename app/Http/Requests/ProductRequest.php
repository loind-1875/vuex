<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'vi.name' => 'required',
            'en.name' => 'required',
            'cn.name' => 'required',
            'images' => 'required|image|mimes:jpeg,bmp,png|max:2048',
            'category' => 'required',
            'star' => 'required|min:0|max:5',
        ];
    }

    public function messages()
    {
        return [
            'vi.name.required' => 'Tên tiếng việt là bắt buộc',
            'en.name.required' => 'Tên tiếng anh là bắt buộc',
            'cn.name.required' => 'Tên tiếng trung là bắt buộc',
            'images.required' => 'Ảnh là bắt buộc',
            'images.max' => 'Ảnh tối đa là 2MB',
            'images.mimes' => 'Chỉ được upload file ảnh jpeg, png, bmp',
            'category.required' => 'Danh mục là bắt buộc',
            'star.required' => 'Số sao là bắt buộc',
        ];
    }
}
