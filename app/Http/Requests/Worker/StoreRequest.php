<?php

namespace App\Http\Requests\Worker;

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
            'surname' => 'required|string',
            'email' => 'required|email',
            'age' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Це поле необхідно заповнити',
            'name.string' => 'Це поле повинно бути рядком',
            'surname.required' => 'Це поле необхідно заповнити',
            'surname.string' => 'Це поле повинно бути рядком',
            'email.required' => 'Це поле необхідно заповнити',
            'email.email' => 'Це поле повинно бути у форматі електронної пошти',
            'age.integer' => 'Це поле повинно бути числом',
            'description.string' => 'Це поле повинно бути рядком',
            'is_married.string' => 'Це поле повинно бути рядком',
        ];
    }

}
