<?php

namespace App\Http\Controller\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginAdminRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'txtEmail' => 'required',
            'txtPassword' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'txtEmail.required' => 'Vui lòng nhập email',
            'txtPassword.required' => 'Vui lòng nhập password'
        ];
    }
}