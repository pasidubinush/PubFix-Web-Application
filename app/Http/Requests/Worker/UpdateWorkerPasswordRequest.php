<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdateWorkerPasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        $user = $this->user();
        $handyman = $user?->handyman;

        return $user?->can('update', $handyman) ?? false;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }
}