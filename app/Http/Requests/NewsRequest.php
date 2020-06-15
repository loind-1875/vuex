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
//            'vi.*.title' => 'required',
//            'en.*.title' => 'required',
//            'cn.*.title' => 'required',
//            'vi.*.detail' => 'required',
//            'en.*.detail' => 'required',
//            'cn.*.detail' => 'required',
//            'vi.*.short_detail' => 'required',
//            'en.*.short_detail' => 'required',
//            'cn.*.short_detail' => 'required',
//            'images' => 'required|image|mimes:jpeg,bmp,png|max:2048',
        ];
    }

    public function messages()
    {
        return [
//            'title_vi.required' => 'Tiêu đề việt là bắt buộc',
//            'title_en.required' => 'Tiêu đề anh là bắt buộc',
//            'title_cn.required' => 'Tiêu đề trung là bắt buộc',
//            'detail_vi.required' => 'Chi tiết việt bắt buộc',
//            'detail_en.required' => 'Chi tiết anh bắt buộc',
//            'detail_cn.required' => 'Chi tiết trung bắt buộc',
//            'short_detail_vi' => 'Tóm tắt việt là bắt buộc',
//            'short_detail_en' => 'Tóm tắt anh là bắt buộc',
//            'short_detail_cn' => 'Tóm tắt trung là bắt buộc',
//            'images.required' => 'Ảnh là bắt buộc',
//            'images.max' => 'Ảnh tối đa là 2MB',
//            'images.mimes' => 'Chỉ được upload file ảnh jpeg, png, bmp',
        ];
    }
}
