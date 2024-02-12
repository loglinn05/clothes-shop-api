<?php

namespace App\Http\Requests\API\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

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
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'tel' => 'required|phone:INTERNATIONAL',
            'password' => 'required|string|confirmed|min:8|max:255',
            'birthdate' => 'nullable|date_format:m/d/Y',
            'address' => 'nullable|string|max:255',
            'gender' => 'nullable|integer|between:0,2'
        ];
    }
}
