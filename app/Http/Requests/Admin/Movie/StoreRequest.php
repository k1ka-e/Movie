<?php

namespace App\Http\Requests\Admin\Movie;

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
            'name' => 'required|string',
            'year' => 'required|date',
            'country_id' => 'required|integer|exists:countries,id',
            'image' => 'required|file',
            'video' => 'required|string',
            'trailer' => 'required|string',
            'age' => 'required|string',
            'description' => 'required|string',
            'genre_ids' => 'nullable|array',
        ];
    }
}
