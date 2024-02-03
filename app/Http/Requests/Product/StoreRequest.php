<?php

namespace App\Http\Requests\Product;

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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|unique:products|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'preview_images' => 'required|array|max:3',
            'preview_images.*' => 'image',
            'price' => 'required|numeric',
            'old_price' => 'required|numeric',
            'count' => 'required|numeric',
            'is_published' => 'nullable|boolean',
            'category_id' => 'required',
            'tags' => 'required|array',
            'colors' => 'required|array',
        ];
    }
}
