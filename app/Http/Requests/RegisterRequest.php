<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }

    public function message(): array
    {
        return [
            'name.required' => 'Data Harus Diisikan!',
            'email.required' => 'Email Harus Diisikan!',
            'email.email' => 'Pastikan Yang dimasukan berupa email!',
            'password.min' => 'Minimal Password 8 Digit',
            'password.required' => 'Password Harus Diisikan!',
        ];
    }
}
