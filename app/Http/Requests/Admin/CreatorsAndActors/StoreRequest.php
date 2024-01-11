<?php

namespace App\Http\Requests\Admin\CreatorsAndActors;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'full_name_ru' => 'required|string',
            'full_name_en' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|file',
            'date_of_birth' => 'required|date',
            'career_id' => 'required|integer|exists:careers,id'
        ];
    }
}
