<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkerSettingsRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
        ];
    }
}