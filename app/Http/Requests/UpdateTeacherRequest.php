<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
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
            'accreditation_number' => 'sometimes|string|max:255',
            'date_of_birth' => 'sometimes|string|max:255',
            'gender' => 'sometimes|string|max:255',
            'date_of_accreditation' => 'sometimes|string|max:255',
            'subject' => 'sometimes|string|max:255',
            'contact' => 'sometimes|string|max:255',
            'address' => 'sometimes|string|max:255',
            'zip_code' => 'sometimes|string|max:255',
        ];
    }
}
