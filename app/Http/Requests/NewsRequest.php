<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'vi.title' => 'required',
            'en.title' => 'required',
            'cn.title' => 'required',
            'vi.detail' => 'required',
            'en.detail' => 'required',
            'cn.detail' => 'required',
            'vi.short_detail' => 'required',
            'en.short_detail' => 'required',
            'cn.short_detail' => 'required',
            'images' => 'required|image|mimes:jpeg,bmp,png|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'vi.title.required' => 'Tiêu đề tiếng việt là bắt buộc',
            'en.title.required' => 'Tiêu đề tiếng anh là bắt buộc',
            'cn.title.required' => 'Tiêu đề tiếng trung là bắt buộc',
            'vi.detail.required' => 'Chi tiết tiếng việt bắt buộc',
            'en.detail.required' => 'Chi tiết tiếng anh bắt buộc',
            'cn.detail.required' => 'Chi tiết tiếng trung bắt buộc',
            'vi.short_detail.required' => 'Tóm tắt tiếng việt là bắt buộc',
            'en.short_detail.required' => 'Tóm tắt tiếng anh là bắt buộc',
            'cn.short_detail.required' => 'Tóm tắt tiếng trung là bắt buộc',
            'images.required' => 'Ảnh là bắt buộc',
            'images.max' => 'Ảnh tối đa là 2MB',
            'images.mimes' => 'Chỉ được upload file ảnh jpeg, png, bmp',
        ];
    }
}
