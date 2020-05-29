<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'images' =>  $this->images ? 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' : 'nullable',
            'category' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên là bắt buộc',
            'price.required' => 'Giá là bắt buộc',
            'images.max' => 'Ảnh tối đa là 2MB',
            'images.mimes' => 'Chỉ được upload file ảnh jpeg, png, bmp, jpg, svg, gif',
            'category.required' => 'Danh mục là bắt buộc',
        ];
    }
}
