<?php

namespace App\Http\Requests\Color;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        //die(var_dump($this->request->get('code')));
        return [
            'code' => [
                'required',
                'string',
                'regex:/^(?:#|0x)(?:[a-f0-9]{3}|[a-f0-9]{6})\b|(?:rgb|hsl)\([^\)]*\)$/i',
                Rule::unique('colors')->ignore($this->request->get('id'))]
        ];
    }
}
