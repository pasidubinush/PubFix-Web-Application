<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'password' => ['required', 'string', 'min:8', 'regex:/[0-9]/'],
            'zip_code' => ['required', 'string', 'max:10'],
            'phone' => ['nullable', 'string', 'max:30'],
            'terms' => ['accepted'],
        ];
    }

    /**
     * Extra validation to ensure the customer name is not already registered.
     */
    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            $fullName = trim($this->input('first_name') . ' ' . $this->input('last_name'));
            if (! empty($fullName) && \App\Models\User::where('name', $fullName)->exists()) {
                $validator->errors()->add('first_name', "A customer is already registered under the name '{$fullName}'. Please choose a different username or log in.");
            }
        });
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'Please enter your first name.',
            'last_name.required' => 'Please enter your last name.',
            'email.required' => 'Please provide an email address.',
            'email.email' => 'Please enter a valid email address format (e.g. name@example.com).',
            'email.unique' => 'An account with this email address is already registered. Please sign in or use another email.',
            'password.required' => 'Please create a password for your account.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.regex' => 'The password must include at least one number.',
            'zip_code.required' => 'Please enter your service ZIP code.',
            'terms.accepted' => 'You must agree to the Terms of Service and Privacy Policy to create an account.',
        ];
    }
}
