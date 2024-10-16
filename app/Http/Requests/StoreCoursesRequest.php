<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoursesRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => ['sometimes', 'nullable', 'string'],
            'upload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slots' => 'required|string|max:10',
            'batch' => 'required|string',
            'start_date' => ['sometimes', 'date', 'nullable'],
            'end_date' => ['sometimes', 'date', 'nullable'],
        ];
    }
}
