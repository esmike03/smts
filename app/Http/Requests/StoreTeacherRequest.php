<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
            'accreditation_number' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'date_of_accreditation' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
            'upload' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ];
    }
}
