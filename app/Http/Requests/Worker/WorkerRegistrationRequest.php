<?php

namespace App\Http\Requests\Worker;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class WorkerRegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'regex:/[0-9]/', 'confirmed'],
            'zip_code' => ['required', 'string', 'max:10'],
            'phone' => ['nullable', 'string', 'max:30'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'hourly_rate' => ['required', 'numeric', 'min:0'],
            'city' => ['required', 'string', 'max:255'],
            'terms' => ['accepted'],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator): void {
            $fullName = trim($this->input('first_name').' '.$this->input('last_name'));

            if ($fullName !== '' && User::where('name', $fullName)->exists()) {
                $validator->errors()->add('first_name', 'A Worker is already registered under this name.');
            }
        });
    }
}