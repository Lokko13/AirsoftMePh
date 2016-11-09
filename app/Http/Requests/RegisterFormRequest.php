<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'username' => 'required|max:255|min:6|unique:users',
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|max:255|min:6',
            'password2' => 'same:password',
            'first_name' => 'required',
            'last_name' => 'required'
        ];
    }
}
