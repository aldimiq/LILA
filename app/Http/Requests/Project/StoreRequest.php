<?php

namespace App\Http\Requests\Project;

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
            'title' => 'required|string|min:3|max:250',
            'featured_image' => 'required|image|mimes:jpg,jpeg,png',
            'content' => 'required|string|min:3',
            'category' => 'required|string|min:3|max:6000',
            'status' => 'required|string|min:3|max:250',
            'author' => 'required|string|min:3|max:250',
        ];
    }
}
