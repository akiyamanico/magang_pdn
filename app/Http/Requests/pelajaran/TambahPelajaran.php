<?php

namespace App\Http\Requests\pelajaran;

use Illuminate\Foundation\Http\FormRequest;

class TambahPelajaran extends FormRequest
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
            'matapelajaran' => 'required',
            'jadwal' => 'required',
            'namaguru' => 'required',
            'tugas' => 'required|mimes:jpg,png,jpeg',
            'deadlinetugas' => 'required',          
        ];
    }

    public function messages(): array
    {
        return [
            'matapelajaran.required' => 'Data Harus Diisikan!',
            'jadwal.required' => 'Data Harus Diisikan!',
            'namaguru.required' => 'Data Harus Diisikan!',
            'tugas.mimes' => 'Pastikan Format File Benar',
            'deadlinetugas.required' => 'Data Harus Diisikan!',
        ];
    }
}
