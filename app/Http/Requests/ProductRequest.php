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
            'image' => 'required',
            'category' => 'required',
            'star' => 'required|min:0|max:5',
            'vi.short_detail' => 'max:700',
            'cn.short_detail' => 'max:700',
            'en.short_detail' => 'max:700',
        ];
    }

    public function messages()
    {
        return [
            'vi.name.required' => 'Tên tiếng việt là bắt buộc',
            'en.name.required' => 'Tên tiếng anh là bắt buộc',
            'cn.name.required' => 'Tên tiếng trung là bắt buộc',
            'images.required' => 'Ảnh là bắt buộc',
            'category.required' => 'Danh mục là bắt buộc',
            'star.required' => 'Số sao là bắt buộc',
            'vi.short_detail.max' => 'Mô tả tối đa chỉ 500 kí tự',
            'cn.short_detail.max' => 'Mô tả tối đa chỉ 500 kí tự',
            'en.short_detail.max' => 'Mô tả tối đa chỉ 500 kí tự',
        ];
    }
}
