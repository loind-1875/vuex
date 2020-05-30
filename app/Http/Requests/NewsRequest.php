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
            'title' => 'required',
            'detail' => 'required',
            'images' => 'required|image|mimes:jpeg,bmp,png|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề là bắt buộc',
            'detail.required' => 'Chi tiết bắt buộc',
            'images.required' => 'Ảnh là bắt buộc',
            'images.max' => 'Ảnh tối đa là 2MB',
            'images.mimes' => 'Chỉ được upload file ảnh jpeg, png, bmp',
        ];
    }
}
