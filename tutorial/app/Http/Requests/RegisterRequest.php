<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fist_name' => 'required:string',
            'last_name' => 'required:string',
            'email' => 'email:rfc,dns',
            'password' => 'required:string',
        ];
    }

    /**
     * Config error message for request validation.
     * @return array<string, string>
     */
    public function messages() {
      return [
        'fist_name.string' => 'First name must be valid',
        'last_name.string' => 'Last name must be valid',
        'email.string' => 'Email must be valid',
        'password.string' => 'Password must be valid',
      ];
    }
}
