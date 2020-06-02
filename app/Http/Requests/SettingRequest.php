<?php

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'email' => 'required|email',
            'current_password' => $this->change_pass ? new MatchOldPassword : 'nullable',
            'new_password' => $this->change_pass ? 'required|different:current_password|min:6' : 'nullable',
            'new_confirm_password' => ['same:new_password'],
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Nhập tên',
            'email' => 'Nhập email',
            'email.email' => 'Email phải là email',
            'new_password.required' => 'Nhập mật khẩu mới',
            'new_confirm_password.same' => 'Mật khẩu mới không khớp',
            'new_password.current_password' => 'Mật khẩu mới phải khác mật khẩu cũ',
            'new_password.min' => 'Mật khẩu phải có ít nhất có 6 kí tự',
        ];
    }
}
