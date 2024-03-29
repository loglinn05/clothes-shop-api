<?php

namespace App\Http\Requests\User;

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
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'tel' => 'phone:INTERNATIONAL',
            'password' => 'required|string|confirmed',
            'birthdate' => 'date_format:m/d/Y',
            'address' => 'nullable|string|max:255',
            'gender' => 'nullable|integer'
        ];
    }
}
