<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required|min:12',
            'foto' => 'required|mimes:jpg,png',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Data Harus Diisikan!',
            'email.required' => 'Email Harus Diisikan!',
            'email.email' => 'Pastikan Yang dimasukan berupa email!',
            'telepon.min' => 'Telepon minimal 12 digit',
            'telepon.required' => 'Telepon wajib di isikan',
            'foto.mimes' => 'Pastikan Format File Benar',
        ];
    }
}
